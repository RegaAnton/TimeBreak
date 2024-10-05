<html>
    <head>
        <title>Project Dashboard</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .sidebar {
                height: 100vh;
                background-color: #343a40;
                color: white;
                padding-top: 20px;
            }
            .sidebar a {
                color: #007bff;
                text-decoration: none;
                display: block;
                padding: 10px 20px;
            }
            .sidebar a:hover {
                background-color: #495057;
            }
            .sidebar .active {
                background-color: #495057;
            }
            .content {
                padding: 20px;
            }
            .content h1 {
                font-size: 2rem;
                margin-bottom: 20px;
            }
            .btn-add {
                background-color: #28a745;
                color: white;
                margin-bottom: 20px;
            }
            .btn-delete {
                background-color: #dc3545;
                color: white;
            }
            .table th,
            .table td {
                vertical-align: middle;
            }
            .navbar-toggler {
                border: none;
            }
            .navbar-toggler:focus {
                outline: none;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#sidebar"
                aria-controls="sidebar"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-brand mb-0 h1">Dashboard</span>
        </nav>
        <div class="d-flex">
            <div class="collapse show" id="sidebar">
                <div class="sidebar p-3">
                    <h4>Dashboard</h4>
                    <a href="#"
                        ><i class="fas fa-home"></i> Dashboard</a
                    >
                    <a href="#" class="active"><i class="fas fa-certificate"></i> Jumbotron </a
                    >
                    <a href="#"
                        ><i class="fas fa-project-diagram"></i> Project</a
                    >
                    <a href="#"><i class="fas fa-file-alt"></i> CV</a>
                    <a href="#"><i class="fas fa-sign-out-alt"></i> Sign out</a>
                </div>
            </div>
            <div class="content flex-grow-1">
                <h1>JUMBOTRON</h1>
                <button class="btn btn-add">Add Jumbotron</button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Images</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    @foreach ($jumbotron as $item)
                        <tbody>
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td><a href="{{ $item->image_url }}">View</a></td>
                                <td>
                                    <form action="{{ route('delete.jumbotron', $item->slug) }}" method="POST">
                                        @csrf
                                        @method('DELETE')                                      
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
