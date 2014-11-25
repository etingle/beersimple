@extends('_master')
<form action="{{ url('output') }}"
      method="POST"
      enctype="multipart/form-data">

    <input type="file" accept="image/*" capture="camera" name="picture"/>
    <input type="submit">
</form>




