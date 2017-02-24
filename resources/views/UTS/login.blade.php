@extends('UTS.index')
@section('content')
<div align="center">
  <p>&nbsp;</p>
  <h2>.::SILAHKAN MASUKAN AKUN::.</h2>
  <br /><br />
  
    <table width="329" height="198" border="0" align="center" background="">
    <tr>
      <th width="24" rowspan="3" scope="row">&nbsp;</th>
      <th height="35%" colspan="3" scope="row">&nbsp;</th>
      <td width="22" rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <th width="85" height="45" scope="row"> <div align="left" class="style1"><em>Username</em></div></th>
      <td width="15">:</td>
      <td width="161">
        <input type="text" name="username" />      </td>
      </tr>
    <tr>
      <th height="47" scope="row"><div align="left" class="style1"><em>Password</em></div></th>
      <td>:</td>
      <td><input type="password" name="password" /></td>
      </tr>
    <tr>
      <th height="45" colspan="5" scope="row">
	  <input type="submit" name="Submit" value="Login" />  
        <input name="reset" type="reset" value="Batal" /></th>
      </tr>
    <tr>
      <th height="27" colspan="5" scope="row">&nbsp;</th>
    </tr>
  </table>
  </form>
</div>
</body>
	
@stop