import PessoaPerdidaComponent from '../components/pessoaPerdida/PessoaPerdidaComponent.vue';
import PessoaPerdidaCreateComponent from '../components/pessoaPerdida/PessoaPerdidaCreateComponent.vue';
import ModalPessoaPerdidaComponent from "../components/pessoaPerdida/ModalPessoaPerdidaComponent";
import ImageComponent from "../components/pessoaPerdida/ImageComponent";
export default [
        {

            path: '/',
            component: PessoaPerdidaComponent,
            name: 'pessoaPerdidaComponent'

        },
        {

            path: '/create',
            component: PessoaPerdidaCreateComponent,
            name: 'pessoaPerdidaCreateComponent'

        },
        {

            path: '/modal',
            component: ModalPessoaPerdidaComponent,
            name: 'modalPessoaPerdidaComponent'

        },
        {

        path: '/image',
        component:ImageComponent,
        name:   'imageComponent'
        },

    ]

