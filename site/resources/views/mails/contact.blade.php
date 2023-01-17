@extends('layout.email')
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
        <td style="padding:10px 0px;">{{ __('contact.First Name') }}: <strong><?php echo $rq->get('name') ?></strong></td>
      </tr>
      <tr><td><div style="border-bottom: 1px solid #cacaca; margin: 10px 0px;"></div></td>
      </tr>
      <tr>
        <td style="padding:10px 0px;">{{ __('contact.Last Name') }}: <strong><?php echo $rq->get('surname') ?></strong></td>
      </tr>
      <tr><td><div style="border-bottom: 1px solid #cacaca; margin: 10px 0px;"></div></td></tr>
      <tr>
        <td style="padding:10px 0px;text-align: left;">{{ __('contact.email') }}: <strong><?php echo $rq->get('email') ?></strong></td>
      </tr>
      <tr>
        <td colspan="2">
          <div style="border-bottom: 1px solid #cacaca; margin: 10px 0px;"></div>
        </td>
      </tr>
      <tr>
        <td style="padding:10px 0px;" colspan="2"> {{ __('contact.message') }}: <strong><?php echo $rq->get('message') ?></strong></td>
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