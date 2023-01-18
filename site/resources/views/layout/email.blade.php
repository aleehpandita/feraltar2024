<?php
use Core\Components\URL;
use Core\Helpers\Contact;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <style type="text/css">
        table {
            border-spacing: 0px; 
        }
        *{
        }
        td{
            max-width: 700px;
            font-size: 16px;
        }
        .cw-logo{
            width: 150px;
        }
        @media (max-width: 575px) {
            .cw-logo{
                width: 130px;
            }
        }
        @media (min-width: 576px) {
        }
      </style>
  </head>
  <body style="color: #6f6f6f; padding:0px;margin:50px 10px 50px 10px; background-color: #eceef1;font-family:Arial, sans-serif;">
    <div style="background-color:#fff;border:2px solid #cacaca;min-width: 360px;max-width: 800px; margin:auto;box-sizing: border-box;padding: 50px;">
      <table style="width: 100%;">
        <tr>
          <td bgcolor="#ffffff" style="">
            <a href="{{ url('') }}" style="color:#676c7a;">
              <img src="{{ url('img/logo.png') }}" alt="{{ $SITE_CONFIGURATION->busoness_name }}" class="cw-logo"  style="display:block;" border="0" />
            </a>
          </td>
          <td style="">
            <table style="width: 100%">
              <tr>
                <td style="font-family: Arial, sans-serif;text-align: right; font-size: 12px">Canc&uacute;n Q. Roo. M&eacute;xico.</td>
              </tr>
              <tr>
                <td style="font-family: Arial, sans-serif;text-align: right; font-size: 12px">{{ __('fleet.phone')}}: (+52) {{$SITE_CONFIGURATION->phone_en}}</td>
              </tr>
              <tr>
                <td style="font-family: Arial, sans-serif;text-align: right; font-size: 12px">E-mail: {{ $SITE_CONFIGURATION->email }}</td>
              </tr>
              <tr>
                <td style="font-family: Arial, sans-serif;text-align: right; font-size: 12px"></td>
              </tr>
            </table>
          </td>
        </tr>
        @yield('content')
        <tr>
          <td colspan="2" style="padding:30px 30px 30px 30px">
            <table style="width: 100%">
              <tr><td style="font-family:Arial, sans-serif; text-align: center;"><a style="color: #004aad; font-weight:800;font-size:12px;text-decoration: none;" href="{{ $SITE_CONFIGURATION->facebook_url }}">Facebook</a> | <a style="color: #004aad; font-weight:800;font-size:12px;text-decoration: none;" href="{{ $SITE_CONFIGURATION->instagram_url }}">Instagram</a></td></tr>
              <tr><td style="font-family:Arial, sans-serif; text-align: center;"><a style="color: #004aad; font-weight:800;font-size:12px;text-decoration: none;" href="{{ url('') }}">{{ url('') }}</a></td></tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
