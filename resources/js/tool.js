Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-pulse',
            path: '/nova-pulse',
            component: require('./components/pages/Tool').default,
        },
    ]);
});
