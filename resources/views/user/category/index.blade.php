@extends('app.document')
@section('title', 'دسته بندی ها')
@section('content')
    <div>
        <h2> لیست دسته بندی ها</h2>
        <table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>آیدی</th>
                    <th>عنوان دسته بندی</th>
                    <th>توضیحات دسته بندی</th>
                    <th>دسته بندی فرزند</th>
                    <th>تصویر</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            @if ($category->children)
                                @foreach ($category->children as $child)
                                    {{ $child->title }}
                                    <br>
                                @endforeach
                            @endif
                        </td>
                        <td>{{ $category->image }}</td>
                        <td>
                            <a href="{{ route('category-show', [$category]) }}">نمایش</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
