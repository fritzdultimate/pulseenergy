<?php

namespace App\Http\Controllers;

use App\Models\Docs;
use App\Models\Files;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $files = Files::all();

        return view('admin.files', compact('user', 'files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $user_id = Auth::id();
        $user = User::find($user_id);

        if(!empty($request->file)) {

            $file = $request->file;
            // Get file name with extension

            $fileNameWithExt = $file->getClientOriginalName();

            // Get just file name

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just file extension
            $fileExt = $file->getClientOriginalExtension();

            // Get just file name to store
            $fileNameToStore = $fileName . '_' . time() . '_' . '.' . $fileExt;

            $files = new Files();
            $files->name = $request->name;
            $files->file_path = $fileNameToStore;
            $save = $files->save();

            $files = Files::all();

            if($save) {
                $file->move(public_path('galleries'), $fileNameToStore);

                return back()
                    ->with('message', 'Image uploaded successfully')
                    ->with('user', $user)
                    ->with('flies', $files);
            } else {
                $request->session()->flash('error', 'Image not uploaded');

                return back()
                    ->with('error', 'Image not uploaded')
                    ->with('user', $user)
                    ->with('flies', $files);
            }
        }
    }

    public function storeFrontDocument(Request $request) {
        $user_id = Auth::id();
        $user = User::find($user_id);

        if(!empty($request->front) || !empty($request->back) || !empty($request->trading)) {

            $file = $request->front ? $request->front : ($request->back ? $request->back: $request->trading);
            // Get file name with extension

            $fileNameWithExt = $file->getClientOriginalName();

            // Get just file name

            // $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just file extension
            $fileExt = $file->getClientOriginalExtension();

            // Get just file name to store
            $fileNameToStore = 'f_' . time() . '_' . '.' . $fileExt;

            $doc = Docs::where('user_id', $user->id)->first();
            $save = false;
            if($doc) {
                Docs::where('user_id', $user->id)->update([
                    'front_doc' => $request->front ? $fileNameToStore : $doc->front_doc,
                    'back_doc' => $request->back ? $fileNameToStore : $doc->back_doc,
                    'trading_doc' => $request->trading ? $fileNameToStore : $doc->trading_doc,
                ]);
                $save = true;
            } else {
                Docs::create([
                    'front_doc' => $request->front ? $fileNameToStore : null,
                    'back_doc' => $request->back ? $fileNameToStore : null,
                    'trading_doc' => $request->trading ? $fileNameToStore : null,
                    'user_id' => $user->id,
                    'status' => 'pending'
                ]);
                $save = true;

            }

            $files = Files::all();

            if($save) {
                $file->move(public_path('docs/kyc'), $fileNameToStore);
                $type = $request->front ? 'Front Document' : ($request->back ? 'Back Document': 'Trading Document');
                $details = [
                    'subject' => "$type was uploaded",
                    'username' => $user->name,
                    'type' => $type,
                    'date' => date("Y-m-d H:i:s"),
                    'view' => 'emails.user.kyc-uploaded',
                    'email' => $user->email,
                ];

                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                $mailer = new \App\Mail\MailSender($details);
                Mail::to($user->email)->queue($mailer);
                $details['view'] = 'emails.admin.kyc-uploaded';

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->queue($mailer);
                }

                return back()
                    ->with('success', 'Document uploaded successfully')
                    ->with('user', $user)
                    ->with('flies', $files);
            } else {
                $request->session()->flash('error', 'Document not uploaded');

                return back()
                    ->with('error', 'Document not uploaded')
                    ->with('user', $user)
                    ->with('flies', $files);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        $file = Files::where('id', $request->id)->first();
        // delete image file
        Storage::delete('public/galleries/' . $file->file_path);

        // Delete data from database
        Files::where('id', $request->id)->delete();

        $files = Files::all();

        return response()->json(
            [
            'success' => ['message' => ['Image Deleted']]
            ], 201
        );
    }
}
