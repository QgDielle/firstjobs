<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotitolo</th>
                <th scope="col">Contenuto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article->id}} </th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>@mdo</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
