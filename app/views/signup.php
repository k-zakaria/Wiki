

<body>
    <div class="row justify-content-center align-items-center">
        <div class="card mt-3" style="background-color:#333 ;width:40%; color:#fff">
            <div class="card-header text-center">
                <h3>Sign un</h3>
            </div>
            <div class="card-body mt-3">
                <form method="post" action="login">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlInput2" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="signIn">Sign Up</button>
                    <div class="mb-3 text-end">
                        <a href="login" class="text-decoration-none " style=" color:#fff">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById('exampleFormControlInput1').value;
            var password = document.getElementById('exampleFormControlInput2').value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Format d email invalide');
                return false;
            }
            if (password.trim() === '') {
                alert('Veuillez entrer un mot de passe');
                return false;
            }
            return true;
        }
    </script>
