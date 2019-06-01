<!--<template>-->
<!--    &lt;!&ndash; .app-aside &ndash;&gt;-->
<!--    <aside class="app-aside">-->
<!--        &lt;!&ndash; .aside-content &ndash;&gt;-->
<!--        <div class="aside-content">-->

<!--            <mobile-header-auth-component></mobile-header-auth-component>-->

<!--            <side-nav-profile-header-img v-if="user"></side-nav-profile-header-img>-->

<!--            &lt;!&ndash; .aside-menu &ndash;&gt;-->
<!--            <section class="aside-menu has-scrollable ps ps&#45;&#45;active-y">-->
<!--                &lt;!&ndash; .stacked-menu &ndash;&gt;-->
<!--                <nav id="stacked-menu" class="stacked-menu stacked-menu-has-collapsible">-->
<!--                    &lt;!&ndash; .menu &ndash;&gt;-->
<!--                    <ul class="menu">-->
<!--                        &lt;!&ndash; .menu-item &ndash;&gt;-->
<!--                        <li class="menu-item">-->
<!--                            <a href="/events" class="menu-link">-->
<!--                                <span class="menu-icon oi oi-dashboard"></span>-->
<!--                                <span class="menu-text">Procura - se </span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        &lt;!&ndash; /.menu-item &ndash;&gt;-->

<!--                            &lt;!&ndash; .menu-item - PessoasPerdidas &ndash;&gt;-->
<!--                            <li v-else style="margin-left: 13px!important" class="menu-item has-child explicador-nav"-->
<!--                                data-intro="Este é o menú, pode selecionar qualquer nível para filtrar explicadores desse nível.">-->
<!--                                <a href="/" class="menu-link" style="padding-left: 5px;">-->
<!--                                    <span class="menu-icon oi oi-people"></span>-->
<!--                                    <span class="menu-text">pessoas Perdidas</span>-->
<!--                                </a>-->
<!--                                &lt;!&ndash; child menu &ndash;&gt;-->
<!--                                <ul class="menu">-->
<!--                                    <template>-->
<!--                                        &lt;!&ndash;TODO: Tirar esse conteudo para um novo componente.&ndash;&gt;-->
<!--                                        <li class="menu-item"-->
<!--                                             data-position='right' data-intro="Aqui encontrá todos os Explicadores registados. Nas opções abaixo, encontrará explicadores do nível que selecionar.">-->
<!--                                            <router-link :to="{ name: 'pessoaPerdidaComponent' }" class="menu-link">Todos-->
<!--                                                <span v-if="" class="badge badge-success"></span>-->
<!--                                                <div v-else class="loader loader-sm" style="float: right"></div>-->
<!--                                            </router-link>-->
<!--                                        </li>-->
<!--                                        <li class="menu-item">-->
<!--                                            <router-link to="/" class="menu-link">Ensino primário-->
<!--                                                <span v-if="" class="badge badge-success">{{ explicadorPrimary.total }}</span>-->
<!--                                                <div v-else class="loader loader-sm" style="float: right"></div>-->
<!--                                            </router-link>-->
<!--                                        </li>-->
<!--                                        <li class="menu-item">-->
<!--                                            <router-link to="/pessoas-achadas" class="menu-link">Ensino secundário-->
<!--                                                <span v-if="pessoaPerdidaAchada.data" class="badge badge-success">{{ explicadorSecundary.total }}</span>-->
<!--                                                <div v-else class="loader loader-sm" style="float: right"></div>-->
<!--                                            </router-link>-->
<!--                                        </li>-->
<!--&lt;!&ndash;                                        <li class="menu-item">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <router-link to="/explicadores-universitarios" class="menu-link">Ensino Superior&ndash;&gt;-->
<!--&lt;!&ndash;                                                <span v-if="explicadorSuperior.data" class="badge badge-success">{{ explicadorSuperior.total }}</span>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <div v-else class="loader loader-sm" style="float: right"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </router-link>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </li>&ndash;&gt;-->
<!--&lt;!&ndash;                                        <li class="menu-item">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <router-link to="/explicadores-tecnicos" class="menu-link">Ensino Técnico&ndash;&gt;-->
<!--&lt;!&ndash;                                                <span v-if="explicadorTecnic.data" class="badge badge-success">{{ explicadorTecnic.total }}</span>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <div v-else class="loader loader-sm" style="float: right"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </router-link>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </li>&ndash;&gt;-->
<!--&lt;!&ndash;                                        <li class="menu-item">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <router-link to="/explicadores-profissionais" class="menu-link">Ensino Profissional&ndash;&gt;-->
<!--&lt;!&ndash;                                                <span v-if="explicadorProfissional.data" class="badge badge-success">{{ explicadorProfissional.total }}</span>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <div v-else class="loader loader-sm" style="float: right"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </router-link>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </li>&ndash;&gt;-->
<!--&lt;!&ndash;                                        <li class="menu-item">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <router-link to="/explicadores-admissao-superior" class="menu-link">Admissão para o ensino Superior&ndash;&gt;-->
<!--&lt;!&ndash;                                                <span v-if="explicadorAdmissaoSuperior.data" class="badge badge-success">{{ explicadorAdmissaoSuperior.total }}</span>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <div v-else class="loader loader-sm" style="float: right"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </router-link>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </li>&ndash;&gt;-->
<!--&lt;!&ndash;                                        <li class="menu-item">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <router-link to="/explicadores-admissao-tecnico" class="menu-link">Admissão para o ensino Técnico&ndash;&gt;-->
<!--&lt;!&ndash;                                                <span v-if="explicadorAdmissaoTecnico.data" class="badge badge-success">{{ explicadorAdmissaoTecnico.total }}</span>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <div v-else class="loader loader-sm" style="float: right"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </router-link>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </li>&ndash;&gt;-->
<!--&lt;!&ndash;                                        <li class="menu-item">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <router-link to="/explicadores-exame-extraordinario" class="menu-link">Exame Extraordinário&ndash;&gt;-->
<!--&lt;!&ndash;                                                <span v-if="explicadorExameExtraordinario.data" class="badge badge-success">{{ explicadorExameExtraordinario.total }}</span>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <div v-else class="loader loader-sm" style="float: right"></div>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </router-link>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </li>&ndash;&gt;-->
<!--                                    </template>-->

<!--                                </ul>-->
<!--                                &lt;!&ndash; /child menu &ndash;&gt;-->
<!--                            </li>-->
<!--                        </template>-->

<!--                    </ul>-->
<!--                    &lt;!&ndash; /.menu &ndash;&gt;-->
<!--                </nav>-->
<!--                &lt;!&ndash; /.stacked-menu &ndash;&gt;-->
<!--                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 765px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 653px;"></div></div>-->
<!--            </section>-->
<!--            &lt;!&ndash; /.aside-menu &ndash;&gt;-->

<!--        </div>-->
<!--        &lt;!&ndash; /.aside-content &ndash;&gt;-->
<!--    </aside>-->
<!--    &lt;!&ndash; /.app-aside &ndash;&gt;-->
<!--</template>-->

<!--<script>-->
<!--    export default {-->
<!--        name: 'sideNavComponent',-->
<!--        data () { return { introCode: 1,}},-->
<!--        computed: {-->
<!--                pessoaPerdida: 'pessoaPerdidaComponent',-->
<!--                pessoaPerdidaAchada: 'pessoaPerdidaAchadaComponent',-->


<!--        },-->
<!--        mounted ()-->
<!--        {-->
<!--           console.log('Estou em funcionamento');-->
<!--        }-->
<!--    }-->
<!--</script>-->
