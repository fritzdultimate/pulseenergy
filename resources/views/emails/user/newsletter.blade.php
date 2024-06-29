@extends('emails.layouts.app')

@section('content')
    <tr>
        <td style="padding-bottom: 10px; font-size: 14px; font-family: 'Inter', sans-serif; color: #a4a3ad;">
            <span class="im">
                <h3 class="m_-3852285001892450277transactions-paragraph">
                    Dear Investor,
                </h3>
            </span>
            <p style="margin-top: 10px; margin-bottom: 20px; width: 100%; font-size: 13px; color: rgb(22, 22, 26); font-family: 'Inter', sans-serif;">
                {{ $details['subject'] }}
            </p>
        </td>
    </tr>

    <tr>
        <td style="padding-bottom: 10px; font-size: ; background-color: #ffffff; padding-left:; padding-right: 2.5vw; width: 100%;">
            <p style="margin-top: 10px; margin-bottom: 20px; width: 100%; font-size: 13px; color: rgb(22, 22, 26); font-family: 'Inter', sans-serif;">
                {{  $details['message'] }}
            </p>
        </td>
    </tr>
@endsection