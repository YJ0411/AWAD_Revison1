<html>
    <x-header data='User'/>
    @if($user=="YL Loo")
        <h1>Hi,{{$user}}</h1>
    @elseif($user=="ali")
        <h1>No, {{$user}}</h1>
    @else
        <h1>Bye</h1>
    @endif

    @foreach($datas as $data)
        {{$data}}
    @endforeach
    <script>
        var data=@json($datas);
        console.log(data);
    </script>
</html>