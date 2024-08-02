<!-- resources/js/Layouts/AdminLayout.vue -->
<template>
  <div>
    <nav>
      <ul>
        <li><Link :href="route('admin.dashboard')">Dashboard demo data</Link></li>
        <li><Link :href="route('admin.projects')">Projects</Link></li>
        <li><Link :href="route('admin.createProject')">Create Project</Link></li>
        <li><Link :href="route('admin.overview')">Overview</Link></li>
      </ul>
    </nav>
    <main>
      <slot></slot>
    </main>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
