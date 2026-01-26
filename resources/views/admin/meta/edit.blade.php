<style>
    form {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
    }

    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    form textarea {
        width: 100%;
        height: 120px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        resize: vertical;
        font-size: 14px;
        transition: border 0.3s, box-shadow 0.3s;
    }

    form textarea:focus {
        border-color: #007BFF;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        outline: none;
    }

    form button {
        display: inline-block;
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s, transform 0.2s;
    }

    form button:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    @media (max-width: 640px) {
        form {
            padding: 15px;
        }

        form button {
            width: 100%;
            text-align: center;
        }
    }
</style>


@extends('admin.app.dashboard')
@section('content')
    <form action="{{ route('meta_update', [$meta->id]) }}" method="post">
        @csrf

        <label for="meta">createMeta:</label>
        <input type="text" name="title" value="{{ $meta->title }}" style="width:100%; height:60px;">
        <br><br>


        <button type="submit">Submit</button>
    </form>
@endsection
