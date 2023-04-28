
<x-layout>
    
    <div class="container my-5">
      <div class="row justify-content-center">
    
      @foreach($articles as $article)
    
        <div class="col-12 col-md-3">
    
              <div class="card">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$article['nome']}} </h5>
                    <p class="card-text">{{$article['data']}}</p>
                    <a href="{{route('dettaglio.articoli', ['id' => $article['id']])}}" class="btn btn-primary">Scopri il film</a>
                </div>
              </div>
            
        </div>
    
        @endforeach
    
      </div>
    </div>
    
</x-layout>






    