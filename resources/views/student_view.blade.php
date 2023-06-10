<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration Form</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style>   
            h2{
            font-family: Sans-serif; 
            font-size: 24px;     
            font-style: normal; 
            font-weight: bold; 
            color: blue;
            text-align: center; 
            text-decoration: underline
            }
            table{
            font-family: verdana; 
            color:white; 
            font-size: 16px; 
            font-style: normal;
            font-weight: bold;
            background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);  
            border-collapse: collapse; 
            border: 4px solid #000000;
            border-style: dashed;
            
            }
            table.inner{
            border: 10px
            }
            input[type=text], input[type=email], input[type=number]{
            width: 50%;
            padding: 6px 12px;
            margin: 5px 0;
            box-sizing: border-box;
            }
            input[type=submit], input[type=reset]{
            width: 15%;
            padding: 8px 12px;
            margin: 5px 0;
            box-sizing: border-box;
            }
        </style>
    </head>
    <body>
        <?php 
        $records = json_decode($records, true);
        // dd($records['data']); ?>
        @foreach ($records['data'] as $item)
        <p>Name: {{ $item['name'] }}</p>
        <p>Type: {{ $item['type'] }}</p>
        <p>Description: {{ $item['description'] }}</p>
        <hr>
        @endforeach

 
        @if (!empty($records['links']))
            <ul class="pagination">
                @foreach ($records['links'] as $link)
                    <li class="{{ $link['active'] ? 'active' : '' }}">
                        @if ($link['url'])
                            <a href="{{ $link['url'] }}">{!! $link['label'] !!}</a>
                        @else
                            <span>{!! $link['label'] !!}</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </body>
</html>