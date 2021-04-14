<template>
    <div>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

            <div class="col-md-6">
                <input id="email" v-model="user.email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

            <div class="col-md-6">
                <input id="password" v-model="user.password" type="password" class="form-control" name="password" required autocomplete="current-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" @click="login" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        user: {
            email: "",
            password: ""
        }
    }),
    methods: {
        login() {
            this.$store.dispatch('currentUser/loginUser', this.user)
        }
    }
}
</script>

<style>

</style>