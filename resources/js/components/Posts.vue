<template>
    <div class="container">
        

        <div>
            <h4 class="text-center font-weight-bold">Posts</h4>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="post in posts">
                    <td>{{post.title}}</td>
                    <td>{{post.content}}</td>
                    <td>
                        <button class="btn btn-danger" @click="deletePost(post)"><i style="color:white" class="fa fa-trash"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: "Posts",
        mounted() {
            this.$store.dispatch('fetchPosts')
        },
        methods: {
            deletePost(post) {
                this.$store.dispatch('deletePost',post)
            }
        },
        computed: {
            ...mapGetters([
                'posts'
            ])
        }
    }
</script>


<!-- 
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
        -->