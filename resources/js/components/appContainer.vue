<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand">Projeto DealerSites</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav navbar-nav ml-auto mt-lg-0">
                        <li class="nav-item active my-2 my-lg-0">
                            <a class="nav-link my-2 my-sm-0" @click="logout" style="cursor: pointer">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    methods: {
        logout() {
            axios.post('/logout')
            .then(response => {
                window.location.href = "login"
            });
        }
    }
}
</script>

<style>

</style>