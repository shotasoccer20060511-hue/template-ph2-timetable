<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>時間割・コース一覧</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h1>時間割・コース一覧</h1>

    <!-- 1つ目のデータ（day = 1）の表示 -->
    <h2>区画1: 1日目の時間割 (day = 1)</h2>
    <table>
        <thead>
            <tr>
                <th>コード</th>
                <th>科目名</th>
                <th>時限</th>
            </tr>
        </thead>
        <tbody>
            @foreach($timetableData1 as $course)
                <tr>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->period }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- 2つ目のデータ（required = true）の表示 -->
    <h2>区画2: 必修科目一覧 (required = true)</h2>
    <table>
        <thead>
            <tr>
                <th>コード</th>
                <th>科目名</th>
                <th>必修フラグ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($timetableData2 as $course)
                <tr>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->required ? '必修' : '選択' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

