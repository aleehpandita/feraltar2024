@extends('layouts.email')
@section('content')

<tr>
  <td colspan="2">
    <div style="border-bottom: 2px solid #cacaca; margin: 30px 0px;"></div>
  </td>
</tr>
<tr>
  <td colspan="2" style="font-size:24px; font-weight:700; color:#004aad;">{{ $rq->get('subject') }}</td>
</tr>
<tr>
  @php
    $country = explode('---', $rq->get('country'));
  @endphp
  <td colspan="2" style="padding-top:5px;">
    <table width="100%">
      <tr>
        <td style="padding:10px 0px;">{{ __('contactUs.fullname') }}: <strong><?php echo $rq->get('fullname') ?></strong></td>
      </tr>
      <tr><td><div style="border-bottom: 1px solid #cacaca; margin: 10px 0px;"></div></td></tr>
      <tr>
        <td style="padding:10px 0px;">{{ __('contactUs.phone') }}: <strong>({{ $country[1] }}) <?php echo $rq->get('phone') ?></strong></td>
      </tr>
      <tr><td><div style="border-bottom: 1px solid #cacaca; margin: 10px 0px;"></div></td></tr>
      <tr>
        <td style="padding:10px 0px;text-align: left;">{{ __('contactUs.email') }}: <strong><?php echo $rq->get('email') ?></strong></td>
      </tr>
      <tr>
        <td colspan="2">
          <div style="border-bottom: 1px solid #cacaca; margin: 10px 0px;"></div>
        </td>
      </tr>
      <tr>
        <td style="padding:10px 0px;" colspan="2"> {{ __('contactUs.country_code') }}: <strong><?php echo $country[0] ?></strong></td>
      </tr>
      <tr>
        <td colspan="2">
          <div style="border-bottom: 1px solid #cacaca; margin: 10px 0px;"></div>
        </td>
      </tr>
      <tr>
        <td style="padding:10px 0px;" colspan="2"> {{ __('contactUs.message') }}: <strong><?php echo $rq->get('message') ?></strong></td>
      </tr>
      <tr>
        <td colspan="2">
          <div style="border-bottom: 1px solid #cacaca; margin: 10px 0px;"></div>
        </td>
      </tr>
    </table>
  </td>
</tr>
@endsection