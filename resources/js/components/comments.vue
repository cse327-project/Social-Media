<template>
  <div class="card">
    <div class="card-body">
      <div class="user">
        <a href="#">Name</a>
        <small class="text-muted text-sm">145</small>
      </div>
      <div class="text">
        <div class="comment-text">{{comment.text}}</div>

        <div>
          <button class="btn btn-sm btn-link text-danger pl-0">Delete</button>

          <button
            type="button"
            class="editButton btn btn-sm btn-link text-primary pl-0"
            data-toggle="modal"
            data-target="#exampleModal"
          >Edit</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["comment"],
  data() {
    return {
      comment: ""
    };
  },
  mounted() {
    this.comment = JSON.parse(this.comment)
  }
};
</script>
