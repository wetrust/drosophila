<div class="container mt-2">
    <h1>Panel de control</h1>
    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Ingresar información del SAG</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
    </ul>
    <h3>What happens here ?</h3>
    <p>
        This is an area that's only visible for logged in users. Try to log out, an go to /dashboard/ again. You'll
        be redirected to /index/ as you are not logged in. You can protect a whole section in your app within the
        according controller by placing <i>Auth::handleLogin();</i> into the constructor.
    <p>
</div>