<?php

// Career > detail-career

Breadcrumbs::for('detailcareer',function($trail, $detailCareer){
    $trail->parent('career');
    $trail->push($detailCareer->job_title,route('detail-career'));
});

Breadcrumbs::for('career',function($trail){
    $trail->push('Career',route('career'));
});

Breadcrumbs::for('home',function($trail){
    $trail->push('Home',route('welcome'));
});
// // // Admin
// job
Breadcrumbs::for('addjob',function($trail){
    $trail->parent('job');
    $trail->push('Add Job',route('create-job-view'));
});

Breadcrumbs::for('editjob',function($trail,$getJob){
    $trail->parent('job');
    $trail->push('Edit Job',route('edit-job',$getJob->id));
});

Breadcrumbs::for('job',function($trail){
    // $trail->parent('admin');
    $trail->push('Job-list',route('job'));
});
// news
Breadcrumbs::for('addnew',function($trail){
    $trail->parent('news');
    $trail->push('Add News',route('create-news'));
});

Breadcrumbs::for('editnews',function($trail,$getNews){
    $trail->parent('news');
    $trail->push('Edit News',route('edit-news',$getNews->id));
});

Breadcrumbs::for('news',function($trail){
    // $trail->parent('admin');
    $trail->push('News',route('news-view'));
});
// highlight
Breadcrumbs::for('highlight',function($trail){
    $trail->push('Highlight',route('highlight'));
});

Breadcrumbs::for('addhigh',function($trail){
    $trail->parent('highlight');
    $trail->push('Add Highlight',route('create-highlight'));
});

Breadcrumbs::for('edithighlight',function($trail,$getHighlight){
    $trail->parent('highlight');
    $trail->push('Edit Highlight',route('edit-highlight',$getHighlight->id));
});
// team
Breadcrumbs::for('team',function($trail){
    $trail->push('Team',route('team'));
});

Breadcrumbs::for('addteam',function($trail){
    $trail->parent('team');
    $trail->push('Add Member',route('create-team-view'));
});

Breadcrumbs::for('editteam',function($trail,$getTeam){
    $trail->parent('team');
    $trail->push('Edit Member',route('edit-member',$getTeam->id));
});
// project

Breadcrumbs::for('project',function($trail){
    $trail->push('Project',route('project'));
});

Breadcrumbs::for('addproject',function($trail){
    $trail->parent('project');
    $trail->push('Add Project',route('create-project-view'));
});
Breadcrumbs::for('editproject',function($trail,$getProject){
    $trail->parent('project');
    $trail->push('Edit Project',route('edit-project',$getProject->id));
});
// set admin
Breadcrumbs::for('setadmin',function($trail){
    $trail->push('Set Admin',route('set-admin'));
});
Breadcrumbs::for('addadmin',function($trail){
    $trail->parent('setadmin');
    $trail->push('Add Admin',route('create-admin-view'));
});
Breadcrumbs::for('editadmin',function($trail,$getAdmin){
    $trail->parent('setadmin');
    $trail->push('Edit Admin',route('edit-project',$getAdmin->id));
});
// detail our work
Breadcrumbs::for('ourwork',function($trail){
    $trail->push('Our Work',route('our-work'));
});
Breadcrumbs::for('detailourwork',function($trail,$getDetailProject){
    $trail->parent('ourwork');
    $trail->push($getDetailProject->title,route('detail-ourwork',$getDetailProject->id));
});
// news categ
Breadcrumbs::for('newscategory',function($trail){
    $trail->push('News Category',route('news-category'));
});
Breadcrumbs::for('addcategory',function($trail){
    $trail->parent('newscategory');
    $trail->push('Add News Category',route('create-category-news-view'));
});
Breadcrumbs::for('editcategory',function($trail,$getCategory){
    $trail->parent('newscategory');
    $trail->push('Edit Category',route('edit-category-news',$getCategory->id));
});
// news releaser
Breadcrumbs::for('newsreleaser',function($trail){
    $trail->push('News Releaser',route('news-releaser'));
});
Breadcrumbs::for('addreleaser',function($trail){
    $trail->parent('newsreleaser');
    $trail->push('Add Releaser',route('create-releaser-view'));
});
Breadcrumbs::for('editreleaser',function($trail,$getReleaser){
    $trail->parent('newsreleaser');
    $trail->push('Edit Releaser',route('edit-releaser',$getReleaser->id));
});