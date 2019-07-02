@extends('layouts.appb')

@section('content')
<div class="container c1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                  @include('inc.mess')
                    <button
                      class="btn btn-primary btn-lg"
                      data-toggle="modal"
                      data-target="#addModal"
                      type="button"
                      name="button">Dodaj Bookmark</button>
                      <hr>
                      <h3>Moji Bookmarks</h3>
                      <ul class="list-group">
                        @foreach($bookmarks as $bookmark)
                          <li class="list-group-item clearfix">
                            <a href="{{$bookmark->url}}" target="_blank"
                               style="position:absolute;top:30%">{{$bookmark->name}}
                               <span class="label label-default">{{$bookmark->description}}</span></a>
                            <span class="pull-right button-group">
                              <br>
                              <br>
                              <br>
                              <button data-id="{{$bookmark->id}}" type="button"
                                class="delete-bookmark btn btn-danger" name="button">
                                <span class="glyphicon glyphicon-remove"></span> Obrisi</button>
                            </span>
                          </li>
                        @endforeach
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Dodaj Bookmark</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('bookmarks.store') }}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label>Bookmark ime</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label>Bookmark URL</label>
            <input type="text" class="form-control" name="url">
          </div>
          <div class="form-group">
            <label>Opis Web-sjedišta</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
