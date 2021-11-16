<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Introduction to Kubernetes</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Learn Kubernetes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="https://kubernetes.io/">Kubernetes Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://kubernetes.io/docs/reference/kubectl/cheatsheet/">Kubectl cheat sheet</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <section>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-6">
                        <h1 class="font-weight-bold p-5">Learn <span class="text-info"> Kubernetes </span></h1>
                        <p class="p-5">Kubernetes, also known as K8s, is an open-source system for <span class="text-secondary"> automating deployment, scaling, and management </span> of containerized applications.</p>
                        <p class="font-weight-bold">Kube <span class="text-info"> Flag: </span></p>
                        <textarea class="pt-2 px-5" id="w3review" name="w3review" rows="1" cols="22">
                        <?php echo file_get_contents("seed.txt"); ?>
                        </textarea> 
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
