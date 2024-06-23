@extends('emails.layouts.app')

@section('content')
    <tr>
        <td style="padding-bottom: 10px; font-size: 14px; font-family: 'Inter', sans-serif; color: #a4a3ad;">
            <span class="im">
                <h3 class="m_-3852285001892450277transactions-paragraph">
                    New Reffered User.
                </h3>
            </span>
            <p style="margin-top: 10px; margin-bottom: 20px; width: 100%; font-size: 13px; color: rgb(22, 22, 26); font-family: 'Inter', sans-serif;">
                A new user joined us using your affliate code.
            </p>

            <span style="font-size:35px; font-weight: bold; line-height: 12px; color: rgb(27, 27, 186);letter-spacing:3px;">{{ ucfirst($details["registered_user"]) }}</span>
        </td>
    </tr>

    
@endsection