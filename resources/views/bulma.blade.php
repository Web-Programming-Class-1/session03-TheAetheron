<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bulma</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>

<body>
    <div class="columns">
        <div class="column is-one-quarter">
        </div>
        <div class="column is-half">
            <div class="field">
                <form id="myForm" action="{{ route('form_bulma.submit') }}" method="POST">
                    @csrf
                    <label class="label">Name : </label>
                    <input class="input is-primary" name="name" type="text" placeholder="Primary input" />
                    <label class="label">Major : </label>
                    <div class="select is-primary">
                        <select name="major">
                            <option value="CS">Computer Science</option>
                            <option value="CS-STAT">Computer Science - Statistics</option>
                            <option value="CS-Math">Computer Science - Mathematics</option>
                        </select>
                    </div>
                </form>
                <button form="myForm" class="button is-primary mt-3" type="submit">Submit</button>
            </div>
        </div>
        <div class="column is-one-quarter">
        </div>

</body>

</html>
