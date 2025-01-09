@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertMessage">
        <style>
            .alert {
                position: fixed;
                top: 90px; /* Distance from the top of the viewport */
                left: 50%;
                transform: translateX(-50%); /* Center the alert horizontally */
                z-index: 1050; /* Ensure it appears above other content */
                width: 100%; /* Optional: set width to 100% or a fixed width if needed */
                max-width: 500px; /* Optional: limit the width */
                /* background-color: #4adb6cd3; */
                color: rgb(0, 0, 0);
                padding: 10px;
                border-radius: 5px;
                text-align: center;
                height: 5%;
            }
        </style>
        {{ session('success') }}
        <button type="button" class="btn-close pt-1" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        // Automatically close the alert after 5 seconds
        setTimeout(function() {
            let alert = document.getElementById('alertMessage');
            if (alert) {
                alert.classList.add('fade');
                alert.classList.remove('show');
            }
        }, 13000);  // 13 seconds
    </script>

@elseif(session('fail'))
    <div class="alert fail alert-danger alert-dismissible fade show" role="alert" id="alertMessageFail">
        <style>
            .fail {
                position: fixed;
                top: 90px; /* Distance from the top of the viewport */
                left: 50%;
                transform: translateX(-50%); /* Center the alert horizontally */
                z-index: 1050; /* Ensure it appears above other content */
                width: 100%; /* Optional: set width to 100% or a fixed width if needed */
                max-width: 500px; /* Optional: limit the width */
                /* background-color: #4adb6cd3; */
                color: rgb(0, 0, 0);
                padding: 10px;
                border-radius: 5px;
                text-align: center;
                height: 5%;
            }
        </style>
        {{ session('fail') }}
        <button type="button" class="btn-close pt-1" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        // Automatically close the alert after 5 seconds
        setTimeout(function() {
            let alert = document.getElementById('alertMessageFail');
            if (alert) {
                alert.classList.add('fade');
                alert.classList.remove('show');
            }
        }, 13000);  // 13 seconds
    </script>
@endif

@if ($errors->any())

                <div class="alert fail alert-danger alert-dismissible fade show" role="alert" id="alertMessageFail">
                    <style>
                        .fail {
                            position: fixed;
                            top: 90px; /* Distance from the top of the viewport */
                            left: 50%;
                            transform: translateX(-50%); /* Center the alert horizontally */
                            z-index: 1050; /* Ensure it appears above other content */
                            width: 100%; /* Optional: set width to 100% or a fixed width if needed */
                            max-width: 500px; /* Optional: limit the width */
                            /* background-color: #4adb6cd3; */
                            color: rgb(0, 0, 0);
                            padding: 10px;
                            border-radius: 5px;
                            text-align: center;
                            height: 5%;
                        }
                    </style>
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close pt-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            
                <script>
                    // Automatically close the alert after 5 seconds
                    setTimeout(function() {
                        let alert = document.getElementById('alertMessageFail');
                        if (alert) {
                            alert.classList.add('fade');
                            alert.classList.remove('show');
                        }
                    }, 13000);  // 13 seconds
                </script>
@endif