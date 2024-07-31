<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{

	public function up()
	{
		Schema::table('certificates', function (Blueprint $table) {
			$table->foreign('userid')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('keywords', function (Blueprint $table) {
			$table->foreign('testid')->references('id')->on('tests')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('test_choises', function (Blueprint $table) {
			$table->foreign('testid')->references('id')->on('tests')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('test_choises', function (Blueprint $table) {
			$table->foreign('test_answer_id')->references('id')->on('test_answers')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('courses', function (Blueprint $table) {
			$table->foreign('userid')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('course_word', function (Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('course_word', function (Blueprint $table) {
			$table->foreign('keyword_id')->references('id')->on('keywords')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('contents', function (Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('exercises', function (Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('exercises_choice', function (Blueprint $table) {
			$table->foreign('exercises_id')->references('id')->on('exercises')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('exercises_choice', function (Blueprint $table) {
			$table->foreign('answer_id')->references('id')->on('exercises_answer')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('view', function (Blueprint $table) {
			$table->foreign('userid')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('view', function (Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('chat', function (Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('chat', function (Blueprint $table) {
			$table->foreign('teacher_id')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('chat_obj', function (Blueprint $table) {
			$table->foreign('chat_id')->references('id')->on('chat')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('global_chat', function (Blueprint $table) {
			$table->foreign('userid')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('global_chat_catagory', function (Blueprint $table) {
			$table->foreign('global_chat_id')->references('id')->on('global_chat')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('comments', function (Blueprint $table) {
			$table->foreign('global_chat_id')->references('id')->on('global_chat')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('comments', function (Blueprint $table) {
			$table->foreign('userid')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('comment_category', function (Blueprint $table) {
			$table->foreign('comment_id')->references('id')->on('comments')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('reports', function (Blueprint $table) {
			$table->foreign('course_id')->references('id')->on('courses')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('reports', function (Blueprint $table) {
			$table->foreign('chat_id')->references('id')->on('chat')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('reports', function (Blueprint $table) {
			$table->foreign('global_chat_id')->references('id')->on('global_chat')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('keywords', function (Blueprint $table) {
			$table->foreign('categoryid')->references('id')->on('categories')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('certificates', function (Blueprint $table) {
			$table->dropForeign('certificates_userid_foreign');
		});
		Schema::table('keywords', function (Blueprint $table) {
			$table->dropForeign('keywords_testid_foreign');
		});
		Schema::table('test_choises', function (Blueprint $table) {
			$table->dropForeign('test_choises_testid_foreign');
		});
		Schema::table('test_choises', function (Blueprint $table) {
			$table->dropForeign('test_choises_test_answer_id_foreign');
		});
		Schema::table('courses', function (Blueprint $table) {
			$table->dropForeign('courses_userid_foreign');
		});
		Schema::table('course_word', function (Blueprint $table) {
			$table->dropForeign('course_word_course_id_foreign');
		});
		Schema::table('course_word', function (Blueprint $table) {
			$table->dropForeign('course_word_keyword_id_foreign');
		});
		Schema::table('contents', function (Blueprint $table) {
			$table->dropForeign('contents_course_id_foreign');
		});
		Schema::table('exercises', function (Blueprint $table) {
			$table->dropForeign('exercises_course_id_foreign');
		});
		Schema::table('exercises_choice', function (Blueprint $table) {
			$table->dropForeign('exercises_choice_exercises_id_foreign');
		});
		Schema::table('exercises_choice', function (Blueprint $table) {
			$table->dropForeign('exercises_choice_answer_id_foreign');
		});
		Schema::table('view', function (Blueprint $table) {
			$table->dropForeign('view_userid_foreign');
		});
		Schema::table('view', function (Blueprint $table) {
			$table->dropForeign('view_course_id_foreign');
		});
		Schema::table('chat', function (Blueprint $table) {
			$table->dropForeign('chat_student_id_foreign');
		});
		Schema::table('chat', function (Blueprint $table) {
			$table->dropForeign('chat_teacher_id_foreign');
		});
		Schema::table('chat_obj', function (Blueprint $table) {
			$table->dropForeign('chat_obj_chat_id_foreign');
		});
		Schema::table('global_chat', function (Blueprint $table) {
			$table->dropForeign('global_chat_userid_foreign');
		});
		Schema::table('global_chat_catagory', function (Blueprint $table) {
			$table->dropForeign('global_chat_catagory_global_chat_id_foreign');
		});
		Schema::table('comments', function (Blueprint $table) {
			$table->dropForeign('comments_global_chat_id_foreign');
		});
		Schema::table('comments', function (Blueprint $table) {
			$table->dropForeign('comments_userid_foreign');
		});
		Schema::table('comment_category', function (Blueprint $table) {
			$table->dropForeign('comment_category_comment_id_foreign');
		});
		Schema::table('reports', function (Blueprint $table) {
			$table->dropForeign('reports_course_id_foreign');
		});
		Schema::table('reports', function (Blueprint $table) {
			$table->dropForeign('reports_chat_id_foreign');
		});
		Schema::table('reports', function (Blueprint $table) {
			$table->dropForeign('reports_global_chat_id_foreign');
		});
		Schema::table('keywords', function (Blueprint $table) {
			$table->dropForeign('keywords_categoryid_foreign');
		});
	}
}
