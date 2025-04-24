<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Medd</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
        .form-box {

            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .form-box input, .form-box textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .form-box button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;

        }
    </style>

</head>
<body>

    <div class="form-box">
        <h3> User Form</h3>

        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>
      @endif

        <form action="{{ url('/submit') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label> full name</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>phone number </label>
            <input type="text" name="phone" required>

            <label> about user </label>
            <textarea name="bio" rows="3" required></textarea>

            <label> profail pactuer</label>
            <input type="file" name="photo" required>

            <button type="submit">send</button>
        </form>
    </div>
           
</body>

</html>


