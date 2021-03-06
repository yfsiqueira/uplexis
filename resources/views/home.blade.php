@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading text-center">NOTÍCIAS</div>

        <div class="panel-body">
          <!--You are logged in!-->


          <div class="list-group">
            <?php
            if($errorMessage == 0){
              foreach($rss->channel->item as $item){
                echo"<a href=\"$item->link\" class=\"list-group-item\">";
                echo"<h4 class=\"list-group-item-heading text-center\">
                $item->title</h4>";
                echo"</a>";
                echo"<br>";
              }
            }else {
              echo "<div class=\"alert alert-danger text-center\" role=\"alert\">
              <b>HOUSTON, WE HAVE A PROBLEM!</b>
              <br>Não foi possível ler o XML!</div>";
            }


            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
