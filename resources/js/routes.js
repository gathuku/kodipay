
import Dashboard from './components/Dashboard.vue';
import Payment from './components/Payment.vue';

import PaymentCreate from './components/payment/Create.vue'
import PaymentEdit from './components/payment/Edit.vue'


export const routes=[
{path:'/dashboard', component:Dashboard},
{path:'/payment',name:'payment',component:Payment},
{path:'/payment/:id/create',name:'paymentCreate',component:PaymentCreate},

{path:'/payment/:id/edit',name:'paymentEdit',component:PaymentEdit},

{path:'*', redirect:'/'}
];
