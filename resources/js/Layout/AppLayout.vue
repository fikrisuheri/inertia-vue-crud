<template>
  <main>
    <div>
      <b-navbar toggleable="lg" type="light" variant="white" class="shadow-sm">
        <div class="container">
          <b-navbar-brand>Inertia Learn</b-navbar-brand>
          <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
          <b-collapse id="nav-collapse" is-nav>
            <b-navbar-nav class="ml-auto">
              <b-nav-item><inertia-link href="/home">Home</inertia-link></b-nav-item>
              <b-nav-item><inertia-link href="/masyarakat">Data Masyarakat</inertia-link></b-nav-item>
              <b-nav-item><inertia-link href="/about">About</inertia-link></b-nav-item>
            </b-navbar-nav>
          </b-collapse>
        </div>
      </b-navbar>
    </div>

    <article class="mt-4 container">
      <slot />
    </article>
  </main>
</template>

<script>
export default {
  props: {
    title: String,
  },
  watch: {
    title: {
      immediate: true,
      handler(title) {
        document.title = title;
      },
    },
  },
};
</script>