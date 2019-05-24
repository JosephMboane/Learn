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


                                    <div class="card" v-for="pessoa_perdida, index in pessoasPerdidas" style="width: 25rem; border-radius: 2px; box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0);">
                                        <center>
                                            <img class="card-img-top rounded-circle" :src="'/imgs_p_perdidas/'+ pessoa_perdida.nome_foto"  style=" width: 180px; height: 180px; TOP: 10PX; position: relative;">
                                            <div class="card-body" id="pesquisar">
                                                <h2 class="" style="color: gray">{{ pessoa_perdida.nome }}</h2>
                                                <h5 class="card-text"> idade : {{ getAge(pessoa_perdida.data_nasc) }}</h5>
                                                <h5 class="card-text"><i class="pe-7s-date"></i> Dias</h5>
                                                <h5 class="card-text" style="color: gray">{{pessoa_perdida.nacionalidade}}</h5>
                                                <h5 class="card-text" style="color: gray">{{pessoa_perdida.naturalidade}}</h5>
                                            </div>
                                        </center>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
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
        data: function (){
            return {
                pessoa_perdidas: ({
                    adress: '',
                    contacto_responsavel: '',
                    created_at: '',
                    data_nasc: '',
                    designacao: '',
                    estado: '',
                    foto: '',
                    id_foto: '',
                    id_localizacao: '',
                    id_p_perdida: '',
                    lat: '',
                    lng: '',
                    nacionalidade: '',
                    naturalidade: '',
                    nome: '',
                    nome_foto: '',
                    nome_localizacao: '',
                    nome_responsavel: '',
                    sexo: '',
                    type: '',
                    updated_at: '',
                    user_id: '',
                }),
                pessoasPerdidas:[],
                next_page: null,
                }
        },
        methods:{
            getPessoasPerdidas(id_p_perdida,index){
                var app = this;
                axios.patch('/pessoa_perdidas' + id_p_perdida)
                    .then(function (resp) {
                        app.pessoasPerdidas = resp.data.data;
                        console.log(app.pessoasPerdidas );
                        app.next_page = resp.data.next_page_url

                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Upsi não foi possivel carregar os dados!");
                    });
            },
            getAge( dateString) {
                var b = new Date();
                let a = new Date(dateString)
                return b.getFullYear() - a.getFullYear()

            },
            getTime( dateString) {

                var b = new Date();
                let a = new Date(dateString)
                return b.getMonth()  - a.getMonth()

            },
        },
        mounted() {
            console.log('Não é possivel.')
            this.getPessoasPerdidas();
        },
    }
</script>

<style scoped>

</style>