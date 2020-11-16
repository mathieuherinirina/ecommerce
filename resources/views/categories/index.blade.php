@extends('layouts.master')

@section('pageTitle', 'categories Index')

@section('content')
    <h1 class="display-6">Categories</h1>
    <a href="{{route('categories/creer')}}">Create New Categorie</a>
    <hr/>


    <table class="table">
        <thead>
        <th>Categorie ID</th>
        <th>Nom Categorie</th>
        <th colspan="3">Actions</th>
        </thead>

        @foreach($categories as $categorie)
            <tr>
                <td>{{$categorie->id}}</td>
                <td>{{$categorie->categorie_nom}}</td>
                
                <td>
                    <div class="d-flex">
                        <a href="{{route('categories', $categorie->id)}}" class="btn btn-info m-1">Details</a>
                        <a href="{{route('categories/modifier', $categorie->id)}}" class="btn btn-primary m-1">Edit</a>

                        @method('DELETE')
                        <form action="{{ route('categories/supprimer', $categorie->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                            <button class="btn btn-danger m-1">Delete Categorie</button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach
    </table>

@endsection