@extends('layouts.master')

@section('title', '生徒一覧')


@section('content')
    <p>ここが本文のコンテンツ</p>
    <a href="{{ route('student.create') }}">生徒新規追加</a>

    <p>bladeの中身だよ</p>
    <p>このページには{{ $students->count() }}件表示中</p>

    <table border="1" width="500" cellspacing="0" cellpadding="5" bordercolor="#333333">
        <tr>
            <th bgcolor="#EE0000">id</th>
            <th bgcolor="#EE0000" width="150">名前</th>
            <th bgcolor="#EE0000" width="200">年齢</th>
            <th bgcolor="#EE0000" width="200">作成日</th>
            <th bgcolor="#EE0000" width="200">更新日</th>
        </tr>

        @foreach($students AS $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->created_at }}</td>
                <td>{{ $student->updated_at }}</td>
            </tr>
        @endforeach
        {{ $students->links() }}
    </table>
@endsection

@section('content_script')
    <script>
        console.log('script test student index');
    </script>
@endsection

