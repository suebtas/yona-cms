<div class="ui segment">
    <a href="{{ url.get() }}clinic-admin/news-level/edit/{{ model.getName() }}?lang={{ constant('LANG') }}" class="ui button">
        <i class="icon left arrow"></i> Back
    </a>

    <form method="post" class="ui negative message form" action="">
        <p>Delete amphur <b>{{ model.getName() }}</b>?</p>
        <button type="submit" class="ui button negative"><i class="icon trash"></i> Delete</button>
    </form>

</div>
