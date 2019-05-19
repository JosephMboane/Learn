<template>

    <!--<div id="content" style="height: 100%">-->
    <section id="services">
        <div>
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);">
                <div class="text-center d-flex justify-content-center">
                    <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center">
                    <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                        <!--<small style="color: red">-->
                        <!--<p style="color: red"><a style="color:inherit;" href="/login"><b>Autentique-se</b></a> para visualizar o perfil dos Explicadores. Ou clique <a style="color:inherit;" href="/register"><b>aqui</b></a> para criar a sua conta </p>-->
                        <!--</small>-->

                        <li class="nav-item active">
                            <router-link to="/" class="btn btn-default"><i class="pe-7s-home"></i>Pagina Inicial</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/create" class="btn btn-default"><i class="pe-7s-add-user"></i>Pessoa Perdida</router-link>
                        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <!--                         <input type="text" id="entrada" arial-label="Search" name="pesquisar" class="form-control"  placeholder="procure..." style="text-align: left" >-->
                            <input type="text" aria-label="Search" placeholder="Procure ..." class="form-control search-field placeholder-shown" maxlength="20" size="50">
                        </li>

                    </ul>


                </div>
            </nav>

        </div>

        <nav aria-label="breadcrumb" style="left: 20px;position: relative;">
            <ol class="breadcrumb">
<!--                <li class="breadcrumb-item"><a href="/">Home</a></li>-->
                <li class="breadcrumb-item current" aria-current="page">Pessoas perdidas|Contributos</li>
            </ol>
        </nav>
        <div class="content" style="left: 5px; position: relative;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">


                        <div class="header">
                            <div class="col-sm-4">
                                <h4 class="title">Pessoa Perdida</h4>
                            </div>
                            <div class="col-sm-6" style="">
                                <h4 class="title">Dar um contributo</h4>
                            </div>
                        </div>

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-4" style="float: right;">


                                    <div class="card" style="width: 25rem; border-radius: 2px; box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0);">
                                        <center>
                                            <img class="card-img-top rounded-circle" src="/imgs_p_perdidas/" style=" width: 180px; height: 180px; TOP: 10PX; position: relative;">
                                            <div class="card-body" id="pesquisar">
                                                <h2 class="" style="color: gray">Nome</h2>
                                                <h5 class="card-text"> anos de idade</h5>
                                                <h5 class="card-text"><i class="pe-7s-date"></i> Dias</h5>
                                                <h5 class="card-text" style="color: gray">Nacionalide</h5>
                                                <h5 class="card-text" style="color: gray">Naturalidade</h5>
                                            </div>
                                        </center>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
<!--                                <div class="col-sm-8">-->



<!--                                    <form method action="" enctype="multipart/form-data">-->
<!--                                        <div class="col-md-12" style="top: -25px">-->
<!--                                            <div class="form-group">-->

<!--                                                <textarea rows="5" name="content" class="form-control" placeholder="adicione aqui qualquer informação que possa ajudar a localizar"></textarea>-->
<!--                                                <input type="number" name="id" class="hidden" value="">-->

<!--                                            </div>-->
<!--                                            <button type="submit" class="btn btn-info btn-fill pull-right" style="top:10px; bottom: 10px; position: relative; ">Comentar</button>-->

<!--                                        </div>-->
<!--                                        <div class="col-md-12">-->
<!--                                            <div class="well form-group">-->
<!--                                                <h4></h4>-->
<!--                                                <small style="color: gray"></small>-->
<!--                                                <div class="card-body " >-->

<!--                                                    <div class="alert alert-success" role="alert">-->

<!--                                                    </div>-->



<!--                                                </div>-->
<!--                                            </div>-->

<!--                                        </div>-->

<!--                                    </form>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log('Não é possivel.')
        },
    }
</script>

<style scoped>

</style>