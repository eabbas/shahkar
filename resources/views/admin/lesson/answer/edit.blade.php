@extends('admin.app.dashboard')
@section('content')
    <style>
        form {
            max-width: 700px;
            margin: 25px auto;
            padding: 25px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            font-family: sans-serif;
        }

        form label {
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        form textarea {
            width: 100% !important;
            height: 140px !important;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            resize: vertical;
            transition: .3s;
            background: #f8f8f8;
        }

        form textarea:focus {
            border-color: #007bff;
            background: #fff;
            box-shadow: 0 0 6px rgba(0, 123, 255, 0.3);
            outline: none;
        }

        /* Checkbox row */
        form label[style] {
            display: flex !important;
            align-items: center;
            gap: 8px;
            font-weight: normal;
            color: #444;
            margin-top: 15px !important;
        }

        form input[type="checkbox"] {
            transform: scale(1.2);
            cursor: pointer;
        }

        /* Button */
        form button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
            transition: .3s;
        }

        form button:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 600px) {
            form {
                padding: 18px;
            }

            form textarea {
                height: 120px !important;
            }

            form button {
                width: 100%;
            }
        }
    </style>

    <form action="{{ route('answer_update', $answer->id) }}" method="post">
        @csrf

        <label for="answer">Answer:</label>
        <textarea id="answer" name="answer" style="width:100%; height:120px;">
        {{ $answer->answer }}
    </textarea>

        <br>

        <label style="margin-top:10px; display:block;">
            <input type="checkbox" name="status" value="1" @if ($answer->status == 1) checked @endif>
            تایید شده
        </label>

        <br>

        <button type="submit">Submit</button>
    </form>
@endsection
