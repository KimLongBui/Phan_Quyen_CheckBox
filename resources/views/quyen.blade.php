<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update.permissions') }}" method="POST">
        @csrf

        <label>
            <input type="checkbox" name="permissions[]" value="view_dashboard">
            Xem Trang Dashboard
        </label>

        <label>
            <input type="checkbox" name="permissions[]" value="view_profile">
            Xem Trang Hồ Sơ
        </label>

        <!-- Thêm các checkbox cho các trang khác -->

        <button type="submit">Lưu</button>
    </form>

</body>
</html>
