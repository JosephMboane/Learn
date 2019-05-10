import PessoaPerdidaComponent from '../components/pessoaPerdida/PessoaPerdidaComponent.vue';
import PessoaPerdidaCreateComponent from '../components/pessoaPerdida/PessoaPerdidaCreateComponent.vue';
import ModalPessoaPerdidaComponent from "../components/pessoaPerdida/ModalPessoaPerdidaComponent";
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
            name: 'ModalPessoaPerdidaComponent'

        },

    ]

