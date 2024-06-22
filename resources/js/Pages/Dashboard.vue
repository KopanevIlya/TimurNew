<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>


<template>


  <Head title="Курсы" />

  <AuthenticatedLayout>


    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


          <div class="max-w-screen-xl mx-auto px-5 bg-white min-h-sceen">
            TEST
<!--            <div class="flex flex-col items-center">-->
<!--              <p class="text-neutral-500 text-xl mt-3">-->
<!--                Часто задаваемые вопросы-->
<!--              </p>-->
<!--            </div>-->
<!--            <div class="grid divide-y divide-neutral-200 max-w-xl mx-auto mt-8">-->
<!--              <div class="py-5">-->
<!--                <details class="group">-->
<!--                  <summary class="flex justify-between items-center font-medium cursor-pointer list-none">-->
<!--                    <span> На какой платформе проводятся курсы?</span>-->
<!--                    <span class="transition group-open:rotate-180">-->
<!--                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>-->
<!--</svg>-->
<!--              </span>-->
<!--                  </summary>-->
<!--                  <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">-->
<!--                    Все занятия записаны на видео и доступны на данном сайте после авторизации в личном кабинете.-->
<!--                  </p>-->
<!--                </details>-->
<!--              </div>-->
<!--              <div class="py-5">-->
<!--                <details class="group">-->
<!--                  <summary class="flex justify-between items-center font-medium cursor-pointer list-none">-->
<!--                    <span> Я просмотрел(а) бесплатные занятия и хочу продолжить обучение, каковы мои дальнейшие-->
<!--                      действия?</span>-->
<!--                    <span class="transition group-open:rotate-180">-->
<!--                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>-->
<!--</svg>-->
<!--              </span>-->
<!--                  </summary>-->
<!--                  <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">-->
<!--                    Вам необходимо написать сообщение на почту <a-->
<!--                      class="text-black-500 text-xl mt-3"-->
<!--                      href="mailto:class-courses@mail.ru">class-courses@mail.ru </a> и сообщить о выбранном курсе.-->
<!--                    После подписания договора и оплаты выбранного курса в личном кабинете откроется соответсвующая-->
<!--                    вкладка с вдеозаписями.-->
<!--                  </p>-->
<!--                </details>-->
<!--              </div>-->
<!--              <div class="py-5">-->
<!--                <details class="group">-->
<!--                  <summary class="flex justify-between items-center font-medium cursor-pointer list-none">-->
<!--                    <span> Как осуществляется поддержка слушателей курса и куда задавать вопросы?</span>-->
<!--                    <span class="transition group-open:rotate-180">-->
<!--                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>-->
<!--</svg>-->
<!--              </span>-->
<!--                  </summary>-->
<!--                  <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">-->
<!--                    Поддержка слушателей курса осуществляется в мессенджере телеграм. После оплаты выбранного курса-->
<!--                    Вы получите ссылку на чат с наставником. В данном чате можно задавать все интересующие вопросы.-->
<!--                  </p>-->
<!--                </details>-->
<!--              </div>-->
<!--              <div class="py-5">-->
<!--                <details class="group">-->
<!--                  <summary class="flex justify-between items-center font-medium cursor-pointer list-none">-->
<!--                    <span> Куда присылать домашние задания?</span>-->
<!--                    <span class="transition group-open:rotate-180">-->
<!--                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>-->
<!--</svg>-->
<!--              </span>-->
<!--                  </summary>-->
<!--                  <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">-->
<!--                   Домашние задания необходимо присылать в чат телеграмм в виде архива с проектом или ссылки на-->
<!--                    репозиторий гит.-->
<!--                  </p>-->
<!--                </details>-->
<!--              </div>-->
<!--            </div>-->
<!--      <Link-->
<!--          :href="route('useragreement')"-->
<!--          class="font-semibold text-gray-900 hover:text-gray-900 dark:text-gray-600 dark:hover:text-blue focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"-->
<!--      >Пользовательское соглашение-->
<!--      </Link>-->
          </div>
        </div>
      </div>
    </div>

  </AuthenticatedLayout>
</template>
