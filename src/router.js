import { createRouter, createWebHistory } from 'vue-router';
import LobbyTwo from './components/LobbyTwo.vue';
import LoginPage from "./components/Introduction/LoginPage.vue";
import SignUp from './components/Introduction/SignUp.vue';
import MyAccount from './components/Introduction/MyAccount.vue';
import HelpPage from './components/Options/HelpPage.vue';
import PolicyPage from './components/Options/PolicyPage.vue';
import SchoolsPage from './components/SchoolsPage.vue';
import NotFound from './components/Options/NotFound.vue';
import CicsMilpaAlta from './components/schools/CicsMilpaAlta';
import CicsSantoTomas from './components/schools/CicsSantoTomas';
import EnbaSchool from './components/schools/EnbaSchool';
import EncbSchool from './components/schools/EncbSchool';
import EnmhSchool from './components/schools/EnmhSchool';
import EscaSantoTomas from './components/schools/EscaSantoTomas';
import EscaTepepan from './components/schools/EscaTepepan';
import EscomSchool from './components/schools/EscomSchool';
import EseSchool from './components/schools/EseSchool';
import EseoSchool from './components/schools/EseoSchool';
import EsfmSchool from './components/schools/EsfmSchool';
import EsiaTecamachalco from './components/schools/EsiaTecamachalco';
import EsiaTicoman from './components/schools/EsiaTicoman';
import EsiaZacatenco from './components/schools/EsiaZacatenco';
import EsimeAzcapo from './components/schools/EsimeAzcapo';
import EsimeCulhuacan from './components/schools/EsimeCulhuacan';
import EsimeTicoman from './components/schools/EsimeTicoman';
import EsimeZacatenco from './components/schools/EsimeZacatenco';
import EsiqieSchool from './components/schools/EsiqieSchool';
import EsitSchool from './components/schools/EsitSchool';
import EsmSchool from './components/schools/EsmSchool';
import EstSchool from './components/schools/EstSchool';


const router = createRouter({
    history: createWebHistory(),
    routes:
    [
        { path: '/', redirect: '/login-page' },
        {path: "/login-page", component: LoginPage},
        {path: "/lobby-two", component: LobbyTwo},
        {path: "/sign-up", component: SignUp},
        {path: "/help-page", component: HelpPage},
        {path: "/policy-page", component: PolicyPage},
        {path: "/my-account", component: MyAccount},
        {path: "/schools-page", component: SchoolsPage},
        {path: "/cics-milpa-alta", component: CicsMilpaAlta},
        {path: "/cics-santo-tomas", component: CicsSantoTomas},
        {path: "/enba-school", component: EnbaSchool},
        {path: "/encb-school", component: EncbSchool},
        {path: "/enmh-school", component: EnmhSchool},
        {path: "/esca-santo-tomas", component: EscaSantoTomas},
        {path: "/esca-tepepan", component: EscaTepepan},
        {path: "/escom-school", component: EscomSchool},
        {path: "/ese-school", component: EseSchool},
        {path: "/eseo-school", component: EseoSchool},
        {path: "/esfm-school", component: EsfmSchool},
        {path: "/esia-tecamachalco", component: EsiaTecamachalco},
        {path: "/esia-ticoman", component: EsiaTicoman},
        {path: "/esia-zacatenco", component: EsiaZacatenco},
        {path: "/esime-azcapo", component: EsimeAzcapo},
        {path: "/esime-culhuacan", component: EsimeCulhuacan},
        {path: "/esime-ticoman", component: EsimeTicoman},
        {path: "/esime-zacatenco", component: EsimeZacatenco},
        {path: "/esiqie-school", component: EsiqieSchool},
        {path: "/esit-school", component: EsitSchool},
        {path: "/esm-school", component: EsmSchool},
        {path: "/est-school", component: EstSchool},
        {path: '/:pathMatch(.*)*', component: NotFound},
    ]
});

export default router;

// router.isReady().then(function(){
//app.mount('#app');
//});
