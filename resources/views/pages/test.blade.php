@extends('layouts.main')
@section('title', 'Site - Tests')

@section('main')
  <h1>Test section starts</h1>
  <table>
  @foreach ($users as $user)
    <tr>
      <td>{{ $user->email }} </td>
      <td>{{ $user->fname }} </td>
      <td>{{ $user->lname }} </td>
    </tr>
  @endforeach
  </table>
  <h1>Test section ends</h1>
@endsection
