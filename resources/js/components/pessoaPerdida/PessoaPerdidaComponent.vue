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
                        <li class="nav-item active">
                            <router-link to="/pessoas-achadas" class="btn btn-default"><i class="pe-7s-home"></i>Pessoas Achadas</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/create" class="btn btn-default"><i class="pe-7s-add-user"></i>Pessoa Perdida</router-link>
                        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <!--                         <input type="text" id="entrada" arial-label="Search" name="pesquisar" class="form-control"  placeholder="procure..." style="text-align: left" >-->
                            <input type="text" @keyup.enter="filtoPessoas" v-model="search" aria-label="Search" placeholder="Procure ..." class="form-control search-field placeholder-shown" maxlength="20" size="50">
<!--                            <button @click.prevent="searchPessoaPesrdida()" class="btn btn-primary"><i class="fa fa-search"></i></button>-->
                        </li>

                    </ul>


                </div>
            </nav>

        </div>

        <div class="container">
<!--            <div v-if="showSearch==true">-->
            <div class="row">
<!--                <div class="col-lg-3" v-for="pessoa_perdida, index in pessoasPerdidas">-->
                <div class="col-sm-4" v-for="pessoa_perdida in filtoPessoas">

<!--                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">-->
<!--                        <div class="icon"><i class="fa fa-shopping-bag"></i></div>-->



<!--&lt;!&ndash;                            <img class="card-img-top rounded-circle" :src="'/imgs_p_perdidas/'+ pessoa_perdida.nome_foto" alt="Generic placeholder image" width="100" height="100" style="margin-left: -40px; margin-top: -40px ">&ndash;&gt;-->
<!--                        &lt;!&ndash;                            <img class="card-img-top rounded-circle" :src="'/imgs_p_perdidas/'+ pessoa_perdida.nome_foto" alt="Generic placeholder image" style=" width: 80px; height: 80px; position: relative;margin-top: -20px">&ndash;&gt;-->
<!--                        <img class="card-img-top rounded-circle ml-5" :src="'/imgs_p_perdidas/'+ pessoa_perdida.nome_foto" alt="Generic placeholder image" style=" width: 80px; height: 80px; TOP: 10PX; position: relative;margin-top: -20px; margin-bottom:20px">-->
<!--                        &lt;!&ndash;{{&#45;&#45;<img id="imagem_historia" class="img-thumbnail" src="/imgs_historias/" alt="Generic placeholder image" width="100" height="100" style="margin-left: -40px; margin-top: -40px">&#45;&#45;}}&ndash;&gt;-->
<!--                        <h5 class="description"  style="text-align: center" >{{ pessoa_perdida.nome }}</h5>-->
<!--                        &lt;!&ndash;                            <p class="description" style="margin-left: -40px" id="testo_historia">Sexo:{{ pessoa_perdida.sexo }}</p>&ndash;&gt;-->
<!--                        <h5 class="description"  style="text-align: center"  id="testo_historia" title="Centro Onde esta localizado">Localiza-se: {{ pessoa_perdida.designacao }}</h5>-->
<!--                        <h5 style="text-align: center"> Idade : {{ getAge(pessoa_perdida.data_nasc) }}</h5>-->
<!--                        <h5 style="text-align: center" title="Esta no sistema ha :"> {{ getDay(pessoa_perdida.created_at) }}</h5>-->
<!--                        &lt;!&ndash;                              <p > idade : {{ // pessoa_perdida.age }}</p>&ndash;&gt;-->
<!--                        &lt;!&ndash;                                <a class="btn btn-default" href="" role="button">Ver Mais</a>&ndash;&gt;-->
<!--                        <hr>-->
<!--&lt;!&ndash;                        <router-link to="/modal" class="btn btn-default">Localizaçao</router-link>&ndash;&gt;-->
<!--                        <router-link  :to="`/contribuir/${pessoa_perdida.id_p_perdida}`" class="btn btn-default">Contribuir</router-link>-->




<!--                    </div>-->
<!--                    <div class="col-sm-4">-->
                        <div class="card" style="width: 18rem; height: 400px; border-radius: 15px; box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);">
                            <img class="card-img-top rounded-circle"  :src="'/imgs_p_perdidas/'+ pessoa_perdida.nome_foto" style=" width: 180px; height: 180px; TOP: 10PX; position: relative;">
                            <div class="card-body" id="pesquisar">
                                <h2 class="">{{ pessoa_perdida.nome }}</h2>
                                <h5 class="card-text">Idade: {{ getAge(pessoa_perdida.data_nasc) }}</h5>
                                <h5 class="card-text" style="color: gray">{{ getDay(pessoa_perdida.created_at)}}</h5>
                            </div>
                            <p><a class="btn btn-info btn-fill" href="" role="button">Detalhes</a></p>
                        </div>
<!--                    </div>-->
                </div>


                <!--                <div v-if="next_page"  >-->
                <!--                    <button type="button" maxlength="20" size="50" class="btn btn-default" @click="getMore()" > Carregar mais</button>-->
                <!--                </div>-->
            </div>
            <div id="about" class="row align-items-center  justify-content-center" style="margin-bottom: 10px;">
            <div v-if="next_page"  class="col-12 col-sm-6"><button id="getMoreMbl" type="button" class="btn btn-block" @click="getMore()" >
                Carregar mais
            </button></div>
            </div>

            <br><br>

        </div>
    </section>

    <!--</div>-->
</template>

<script>
    export default {
        data: function () {

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
                search:''
            }
            // return {
            //     pessoa_perdidas:[]
            // }
        },
        mounted() {
            let l = this;
            l.getPessoasPerdidas();

        },
        computed:{
            filtoPessoas:function(){
                return this.pessoasPerdidas.filter((p)=>{
                   return p.nome.match(this.search);

                });
            }

        },
        methods: {
            searchit(){
                // console.log("Pesquisando ...");
                Fire.$on('searching',() =>{
                    // let query = this.$parent.search;
                    let query = '';
                    axios.get('pessoa_perdidas/search?pesquisar='+ query)
                        .then((data) => {
                            this.pessoasPerdidas = data.data;
                        })
                        .catch((err) =>{
                            console.log(err)
                        })
                });
                console.log("Pesquisando ...");
            },
            getPessoasPerdidas(){
                var app = this;
                axios.get('/pessoa_perdidas')
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
            getContribuir(id_p_perdida){
                var app = this;
                axios.get('/pessoa_perdidas' + id_p_perdida)
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
            getProfilePhoto(){

                let f = "/imgs_p_perdidas/"+ this.pessoa_perdidas.nome_foto ;
                return f;
                // return "{{ asset('imgs_p_perdidas/') "+ this.nome_foto ;

            },
            getAge( dateString) {
                var b = new Date();
                let a = new Date(dateString)
                return b.getFullYear() - a.getFullYear()

            },
            // getTime( dateString) {
            //    let data1 = new Date(dateString);
            //    let  data2 = new Date();
            //    let diferenca = Math.abs(date2.getData() - date1); //diferença em milésimos e positivo
            //    let dia = 1000*60*60*24; // milésimos de segundo correspondente a um dia
            //    let total = Math.round(diferenca/dia); //valor total de dias arredondado
            //    return    Math.round(total*24); // valor total em Horas
            //
            // },
            getDay(dateString){
                let oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
                let firstDate = new Date(dateString);
                let secondDate = new Date();

                return   Math.round(Math.abs((secondDate.getTime() - firstDate.getTime())/(oneDay))) + " dias" ;
            },
            getMore(){
                var app = this
                axios.get(app.next_page)
                    .then(function (resp) {
                        app.pessoasPerdidas = app.pessoasPerdidas.concat(resp.data.data)
                        // console.log(resp )
                        app.next_page = resp.data.next_page_url

                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Upsi não foi possivel carregar os dados!");
                    });
            }
        }
    }
</script>
