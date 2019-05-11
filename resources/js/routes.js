
import Dashboard from './components/Dashboard.vue';
import Payment from './components/Payment.vue';

import PaymentCreate from './components/payment/Create.vue'


export const routes=[
{path:'/dashboard', component:Dashboard},
{path:'/payment',component:Payment},
{path:'/payment/:id/create',name:'paymentCreate',component:PaymentCreate},
{path:'*', redirect:'/'}
];
