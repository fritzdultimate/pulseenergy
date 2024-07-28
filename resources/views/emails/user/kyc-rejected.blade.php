@extends('emails.layouts.app')

@section('content')
    <tr>
        <td style="padding-bottom: 10px; font-size: 14px; font-family: 'Inter', sans-serif; color: #a4a3ad;">
            <span class="im">
                <h3 class="m_-3852285001892450277transactions-paragraph">
                    Your Account has been downgraded to tier 1
                </h3>
            </span>
        </td>
    </tr>

    <tr>
        <td style="padding-bottom: 10px; font-size: ; background-color: #ffffff; padding-left:; padding-right: 2.5vw; width: 100%;">
            <table role="presentation" style="width: 100%; border: none; border-spacing: 0; padding: 5px 0px; border-radius: 0.5vw;">
                <tbody style="width:100%;">

                    <tr style="width: 100%;">
                        <td style="display: flex; justify-content:space-evenly; width:100%;">
                            <div style="display: inline-block; width: 100%; max-width: 50%; vertical-align: top; text-align: left; color: #a4a3ad;">
                                <div class="m_-3852285001892450277data-des">
                                   Username
                                </div>
                            </div>
                            <div style="max-width: 50%; vertical-align: top; padding-bottom: 20px; margin-left: auto; font-size: 12px;">
                                <div class="m_-3852285001892450277payment-value">
                                    {{ ucfirst($details['username']) }}
                                </div>
                            </div>
                        </td>
                    </tr>

                   

                    <tr style="width: 100%;">
                        <td style="display: flex; justify-content:space-evenly; width:100%;">
                            <div style="display: inline-block; width: 100%; max-width: 50%; vertical-align: top; text-align: left; color: #a4a3ad;">
                                <div class="m_-3852285001892450277data-des">
                                    Date &amp; time
                                </div>
                            </div>
                            <div style="max-width: 50%; vertical-align: top; padding-bottom: 20px; margin-left: auto; font-size: 12px;">
                                <div class="m_-3852285001892450277payment-value">
                                    {{ date('Y-m-d') }} | {{ date('h:m:s A') }}

                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
@endsection