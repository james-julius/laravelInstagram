<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function () {
            return {
                status: this.follows
            }
        },

        props: ['userId'],
        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        console.log(response.data);
                        this.status = !this.status;
                    })
                    .catch(error => {
                        if (error.response.status === 401) {
                            window.location = '/login';
                        }
                        });
            }
        },
        computed: {
            buttonText() {
                return (this.status) ? 'Follow' : 'Unfollow';
            }
        }
    }
</script>
n 