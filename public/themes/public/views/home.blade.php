{!!Block::display('head')!!}
{!!Block::display('becomementor')!!}
{!!Block::display('workshops')!!}

<style>
    .strips {
        min-height: 100vh;
        text-align: center;
        overflow: hidden;
        color: white;
    }
    .strips__strip {
        will-change: width, left, z-index, height;
        position: absolute;
        width: 20%;
        min-height: 100vh;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }
    .strips__strip:nth-child(1) {
        left: 0;
    }
    .strips__strip:nth-child(2) {
        left: 20vw;
    }
    .strips__strip:nth-child(3) {
        left: 40vw;
    }
    .strips__strip:nth-child(4) {
        left: 60vw;
    }
    .strips__strip:nth-child(5) {
        left: 80vw;
    }
    .strips__strip:nth-child(1) .strip__content {
        background: #244f75;
        transform: translate3d(-100%, 0, 0);
        animation-name: strip1;
        animation-delay: 0.1s;
    }
    .strips__strip:nth-child(2) .strip__content {
        background: #60bfbf;
        transform: translate3d(0, 100%, 0);
        animation-name: strip2;
        animation-delay: 0.2s;
    }
    .strips__strip:nth-child(3) .strip__content {
        background: #8c4b7e;
        transform: translate3d(0, -100%, 0);
        animation-name: strip3;
        animation-delay: 0.3s;
    }
    .strips__strip:nth-child(4) .strip__content {
        background: #f8bb44;
        transform: translate3d(0, 100%, 0);
        animation-name: strip4;
        animation-delay: 0.4s;
    }
    .strips__strip:nth-child(5) .strip__content {
        background: #f24b4b;
        transform: translate3d(100%, 0, 0);
        animation-name: strip5;
        animation-delay: 0.5s;
    }
    @media screen and (max-width: 760px) {
        .strips__strip {
            min-height: 20vh;
        }
        .strips__strip:nth-child(1) {
            top: 0;
            left: 0;
            width: 100%;
        }
        .strips__strip:nth-child(2) {
            top: 20vh;
            left: 0;
            width: 100%;
        }
        .strips__strip:nth-child(3) {
            top: 40vh;
            left: 0;
            width: 100%;
        }
        .strips__strip:nth-child(4) {
            top: 60vh;
            left: 0;
            width: 100%;
        }
        .strips__strip:nth-child(5) {
            top: 80vh;
            left: 0;
            width: 100%;
        }
    }
    .strips .strip__content {
        animation-duration: 1s;
        animation-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
        animation-fill-mode: both;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        text-decoration: none;
    }
    .strips .strip__content:hover:before {
        transform: skew(-30deg) scale(3) translate(0, 0);
        opacity: 0.1;
    }
    .strips .strip__content:before {
        content: "";
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
        opacity: 0.05;
        transform-origin: center center;
        transform: skew(-30deg) scaleY(1) translate(0, 0);
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }
    .strips .strip__inner-text {
        will-change: transform, opacity;
        position: absolute;
        z-index: 5;
        top: 50%;
        left: 50%;
        width: 70%;
        transform: translate(-50%, -50%) scale(0.5);
        opacity: 0;
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }
    .strips__strip--expanded {
        width: 100%;
        top: 0 !important;
        left: 0 !important;
        z-index: 3;
        cursor: default;
    }
    @media screen and (max-width: 760px) {
        .strips__strip--expanded {
            min-height: 100vh;
        }
    }
    .strips__strip--expanded .strip__content {
        overflow-y: scroll;
    }
    .strips__strip--expanded .strip__content:hover:before {
        transform: skew(-30deg) scale(1) translate(0, 0);
        opacity: 0.05;
    }
    .strips__strip--expanded .strip__title {
        opacity: 0;
    }
    .strips__strip--expanded .strip__inner-text {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
    .strip__title {
        display: block;
        margin: 0;
        position: relative;
        z-index: 2;
        width: 100%;
        font-size: 3.5vw;
        color: white;
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }
    @media screen and (max-width: 760px) {
        .strip__title {
            font-size: 28px;
        }
    }
    .strip__close {
        position: absolute;
        right: 3vw;
        top: 3vw;
        opacity: 0;
        z-index: 10;
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        cursor: pointer;
        transition-delay: 0.5s;
    }
    .strip__close--show {
        opacity: 1;
    }
    @keyframes strip1 {
        0% {
            transform: translate3d(-100%, 0, 0);
        }
        100% {
            transform: translate3d(0, 0, 0);
        }
    }
    @keyframes strip2 {
        0% {
            transform: translate3d(0, 100%, 0);
        }
        100% {
            transform: translate3d(0, 0, 0);
        }
    }
    @keyframes strip3 {
        0% {
            transform: translate3d(0, -100%, 0);
        }
        100% {
            transform: translate3d(0, 0, 0);
        }
    }
    @keyframes strip4 {
        0% {
            transform: translate3d(0, 100%, 0);
        }
        100% {
            transform: translate3d(0, 0, 0);
        }
    }
    @keyframes strip5 {
        0% {
            transform: translate3d(100%, 0, 0);
        }
        100% {
            transform: translate3d(0, 0, 0);
        }
    }
    /* Demo purposes */
    body {
        font-family: 'Lato';
        -webkit-font-smoothing: antialiased;
        text-rendering: geometricPrecision;
        line-height: 1.5;
    }
    h1, h2 {
        font-weight: 300;
    }
    .fa {
        font-size: 30px;
        color: white;
    }
    h2 {
        font-size: 36px;
        margin: 0 0 16px;
    }
    p {
        margin: 0 0 16px;
    }

</style>

<div class="row">
    <section class="strips">
        <article class="strips__strip">
            <div class="strip__content">
                <h1 class="strip__title" data-name="Lorem">Compute</h1>
                <div class="strip__inner-text">
                    <h2>Amazon EC2</h2>
                    <p>Amazon Elastic Compute Cloud (Amazon EC2) is a web service that provides secure, resizable compute capacity in the cloud. It is designed to make web-scale computing easier for developers</p>
                    <h2>Amazon EC2 Auto Scaling</h2>
                    <p>Amazon EC2 Auto Scaling helps you maintain application availability and allows you to automatically add or remove EC2 instances according to conditions you define. You can use the fleet management features of Amazon EC2 Auto Scaling to maintain the health and availability of your fleet.</p>
                    <h2>Amazon Elastic Container Registry</h2>
                    <p>Amazon Elastic Container Registry (ECR) is a fully-managed Docker container registry that makes it easy for developers to store, manage, and deploy Docker container images. Amazon ECR is integrated with Amazon Elastic Container Service (Amazon ECS), simplifying your development to production workﬂow.</p>
                    <h2>AWS Elastic Beanstalk</h2>
                    <p>AWS Elastic Beanstalk is an easy-to-use service for deploying and scaling web applications and services developed with Java, .NET, PHP, Node.js, Python, Ruby, Go, and Docker on familiar servers such as Apache, Nginx, Passenger, and Internet Information Services (IIS)</p>
                    <h2>AWS Lambda</h2>
                    <p>AWS Lambda lets you run code without provisioning or managing servers. You pay only for the compute time you consume—there is no charge when your code is not running. With Lambda, you can run code for virtually any type of application or backend service—all with zero administration.</p>

                </div>

            </div>
        </article>
        <article class="strips__strip">
            <div class="strip__content">
                <h1 class="strip__title" data-name="Ipsum">Storage</h1>
                <div class="strip__inner-text">
                    <h2>Amazon Elastic Block Store</h2>
                    <p>Amazon Elastic Block Store (Amazon EBS) provides highly available, consistent, low-latency block storage for Amazon EC2. It helps you tune applications with the right storage capacity, performance and cost.
                    </p>
                    <h2>Amazon Elastic File System(EFS)
                    </h2>
                    <p>Amazon Elastic File System (Amazon EFS) provides a simple, scalable, elastic file system for Linux-based workloads for use with AWS Cloud services and on-premises resources. It is built to scale on demand to petabytes without disrupting applications, growing and shrinking automatically as you add and remove files, so your applications have the storage they need – when they need it.
                    </p>
                    <h2>Amazon S3</h2>
                    <p>Amazon Simple Storage Service (Amazon S3) is object storage designed to store and access any type of data over the Internet.
                        It is secure, 99.999999999% durable, and scales past tens of trillions of objects. S3 is used for backup and recovery, tiered archive, user-driven content (like photos, videos, music and files), data lakes for Big Data analytics and data warehouse platforms, or as a foundation for serverless computing design.
                    </p>
                    <h2>Amazon FSx for Windows File Server</h2>
                    <p>Amazon FSx for Windows File Server provides a fully managed native Microsoft Windows file system so you can easily move your Windows-based applications that require file storage to AWS. Built on Windows Server, Amazon FSx provides shared file storage with the compatibility and features that your Windows-based applications rely on, including full support for the SMB protocol and Windows NTFS, Active Directory (AD) integration, and Distributed File System (DFS).
                    </p>
                    <h2>Amazon S3 Glacier & S3 Glacier Deep Archive</h2>
                    <p>Amazon S3 Glacier and S3 Glacier Deep Archive are secure, durable, and extremely low-cost Amazon S3 cloud storage classes for data archiving and long-term backup.
                        S3 Glacier and S3 Deep Archive are solutions for customers who want low-cost storage for infrequently accessed data. It can replace tape for media and entertainment applications, and assist with compliance in highly regulated organizations like healthcare, life science, and financial services.
                    </p>

                </div>
            </div>
        </article>
        <article class="strips__strip">
            <div class="strip__content">
                <h1 class="strip__title" data-name="Dolor">Networking</h1>
                <div class="strip__inner-text">
                    <h2>Amazon VPC</h2>
                    <p>Amazon Virtual Private Cloud (Amazon VPC) lets you provision a logically isolated section of the AWS Cloud where you can launch AWS resources in a virtual network that you define. You have complete control over your virtual networking environment, including selection of your own IP address range, creation of subnets, and configuration of route tables and network gateways.</p>
                    <h2>Amazon CloudFront</h2>
                    <p>Amazon CloudFront is a fast content delivery network (CDN) service that securely delivers data, videos, applications, and APIs to customers globally with low latency, high transfer speeds, all within a developer-friendly environment. CloudFront is integrated with AWS – both physical locations that are directly connected to the AWS global infrastructure, as well as other AWS services.</p>
                    <h2>Amazon Route 53</h2>
                    <p>Amazon Route 53 is a highly available and scalable cloud Domain Name System (DNS) web service. It is designed to give developers and businesses an extremely reliable and cost-effective way to route end users to Internet applications by translating human readable names, such as www.example.com, into the numeric IP addresses, such as 192.0.2.1, that computers use to connect to each other. Amazon Route 53 is fully compliant with IPv6 as well.</p>
                    <h2>Amazon API Gateway</h2>
                    <p>Amazon API Gateway is a fully managed service that makes it easy for developers to create, publish, maintain, monitor, and secure APIs at any scale. With a few clicks in the AWS Management Console, you can create an API that acts as a “front door” for applications to access data, business logic, or functionality from your back-end services.</p>
                    <h2>Elastic Load Balancing(ELB)</h2>
                    <p>Elastic Load Balancing (ELB) automatically distributes incoming application traffic across multiple targets, such as Amazon EC2 instances, containers, and IP addresses. It can handle the varying load of your application traffic in a single Availability Zone or across multiple Availability Zones.</p>
                </div>
            </div>
        </article>
        <article class="strips__strip">
            <div class="strip__content">
                <h1 class="strip__title" data-name="Sit">Devops</h1>
                <div class="strip__inner-text">
                    <h2> What is Devops?</h2>
                    <p>DevOps promotes communication and collaboration between business, development & operations teams. In a way, we are talking about unification.DevOps is not only about tools but also about involving people and process.DevOps is about automating the development, release and operation processes.
                    </p>
                    <h2>Continuous Integration.</h2>
                    <p>Once the code is committed, then the entire work of developers is well integrated and the build is performed on a regular basis based on every check-in or schedule. Hence, Continuous Integration as a practice forces the developer to integrate their changes with the others so as to get an early feedback.
                    </p>
                    <h2>Continuous Delivery.</h2>
                    <p>Continuous Delivery is an extension of Continuous Integration which primarily helps to get the features which the developers are developing out to the end users as soon as possible. During this process, it goes through various stages of QA, Staging etc., and then for delivery to the PRODUCTION system.
                    </p>
                    <h2>Continuous Testing</h2>
                    <p>From the above goal of Continuous Integration which is to get the application out to end users are primarily enabling continuous delivery. This cannot be completed without a sufficient amount of unit testing and automation testing.
                    </p>
                    <h2>Continuous Monitoring</h2>
                    <p> As the application is developed and deployed, we do need to monitor its performance. Monitoring is also very important as it might help to uncover the defects which might not have been detected earlier.
                    </p>

                </div>
            </div>
        </article>
        <article class="strips__strip">
            <div class="strip__content">
                <h1 class="strip__title" data-name="Amet">Prepare for Interview</h1>
                <div class="strip__inner-text">
                    <h2>What is cloud computing?</h2>
                    <p>Cloud computing is an internet based new age computer technology. It is the next stage technology that uses the clouds to provide the services whenever and wherever the user need it.It provides a method to access several servers world wide.</p>
                    <h2>What is on-demand functionality? How is it provided in cloud computing?</h2>
                    <p>Cloud computing provides a on-demand access to the virtualized IT resources. It can be used by the subscriber. It uses shared pool to provide configurable resources. Shared pool contains networks, servers, storage, applications and services.</p>
                    <h2>What is the difference between cloud computing and mobile computing?</h2>
                    <p>Mobile computing and cloud computing are slightly same in concept. Mobile computing uses the concept of cloud computing . Cloud computing provides users the data which they required while in mobile computing, applications run on the remote server and gives user the access for storage and manage.</p>
                    <h2>What is the difference between scalability and elasticity?</h2>
                    <p>Scalability is a characteristic of cloud computing which is used to handle the increasing workload by increasing in proportion amount of resource capacity. By the use of scalability, the architecture provides on demand resources if the requirement is being raised by the traffic. Whereas, Elasticity is a characteristic which provides the concept of commissioning and decommissioning of large amount of resource capacity dynamically. It is measured by the speed by which the resources are coming on demand and the usage of the resources.</p>
                    <h2>What is "EUCALYPTUS" in cloud computing? Why is it used?</h2>
                    <p>It is an acronym stands for Elastic Utility Computing Architecture For Linking Your Program To Useful Systems. It is an open source software infrastructure in cloud computing and used to implement clusters in cloud computing platform. It creates public, private and hybrid cloud. It facilitate a user to create his own data center into a private cloud and use its functionalities to many other organizations.</p>

                </div>
            </div>
        </article>
        <i class="fa fa-close strip__close"></i>
    </section>
</div>

@php
    $partners = get_partners();
    $cities = get_cities();
    $languages = get_languages();
    $skills = get_skills();
@endphp

<style>
    #ui-id-1-button{
        display: none;
    }
</style>

{!!Block::display('why')!!}
{!!Block::display('about')!!}
<div class="col-sm-12 content-center text-center">
    <section class="vc_row pt-75 pb-75" id="partners">

        <div class="container">
            <div class="row">

                <div class="lqd-column col-md-6 col-md-offset-3 text-center">

                    <h2>Implementing Partners</h2>

                </div><!-- /.col-md-6 col-md-offset-3 -->

            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="container-fluid">
            <div class="row">

                <div class="lqd-column col-md-12">

                    <div class="carousel-container carousel-shadow-all carousel-nav-left carousel-nav-md carousel-dots-style4 carousel-items-4-5">

                        <div class="carousel-items row"
                             data-lqd-flickity='{"imagesLoaded": false ,"cellAlign":"center","prevNextButtons":false,"buttonsAppendTo":"self","pageDots":true,"groupCells":true,"contain": true,"pauseAutoPlayOnHover":false}'>
                            @foreach($partners as $partner)
                                @php
                                    $image_rep = str_replace('public','/storage',$partner->team_logo);
                                @endphp
                                <div class="carousel-item col-xs-12">
                                    <a href="#modal-1" onclick="get_projects({{$partner->id}})" data-lity="#modal-1">
                                        <figure>
                                            <img src="{{$image_rep}}" alt="Carousel">
                                        </figure>
                                    </a>
                                </div>
                                <!-- /.carousel-item -->
                            @endforeach

                        </div><!-- /.carousel-items row -->

                    </div><!-- /.carousel-container -->

                </div><!-- /.col-md-12 -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    </section>
</div>
<div id="modal-1" class="lqd-modal lity-hide">
    <div class="lqd-modal-inner">

        <div class="lqd-modal-head"></div><!-- /.lqd-modal-head -->

        <div class="lqd-modal-content">

            <div class="row">
                <div class="col-md-12 text">

                    <figure class="mb-3">
                        <img id="cover_image" src="" alt="Modal Image">
                    </figure>

                    <div class="row">
                        <div class="lqd-column col-md-12 ">
                            <div class="lqd-column col-md-12 text-center">
                                <div class="lqd-column col-md-8 col-md-offset-2">

                                    <div class="accordion-partners accordion-lg accordion-title" id="accordion-1"
                                         role="tablist">

                                    </div><!-- /.accordion -->
                                </div>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.col-md-8 col-md-offset-2 -->
                    </div><!-- /.row -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

        </div><!-- /.lqd-modal-content -->

        <div class="lqd-modal-foot"></div><!-- /.lqd-modal-foot -->

    </div><!-- /.lqd-modal-inner -->
</div><!-- /.lqd-modal -->

{!!Block::display('testimonials')!!}
{!!Block::display('faq')!!}
<div class="col-sm-12 content-center text-center">
<section id="apply">
    <div class="container">
        <div class="row">
            <div class="lqd-column col-md-10 col-md-offset-1 text-center" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:100,&quot;initValues&quot;:{&quot;translateY&quot;:80,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateY&quot;:0,&quot;opacity&quot;:1}}">
                <header class="fancy-title fancy-title-big mb-6">
                    <h2 data-split-text="true" data-split-options="{&quot;type&quot;:&quot;lines&quot;}">
                        Apply For Mentorship!
                        <br>
                    </h2>
                </header><!-- /.fancy-title -->
                <form action="user/application/store" method="POST" enctype="multipart/form-data" >
                    <div class="form">
                    <div class="form-group">
                        <label>Identification</label>
                        <input type="text" name="name" class="form-control valid" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" aria-invalid="false">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" class="form-control valid" id="lastname" placeholder="Your Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" aria-invalid="false">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control valid" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <select class="form-control valid" id="sex" name="sex" required="">
                            <optgroup label="Choose Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </optgroup>
                        </select>
                    </div>

                    <input type="hidden" name="dob" value="2014-05-15">
                    <div class="form-group">
                        <label>Contact Info</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label>Where do you live ?</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="street" id="street" placeholder="Street" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <select class="form-control valid" id="city" name="city" required="">
                            <optgroup label="Choose City">
                                @foreach($cities as $city)
                                    <option value="{{$city}}">{{$city}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="district" id="district" placeholder="District" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="state" id="state" placeholder="State" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="country" id="country" placeholder="Country" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>


                    <div class="form-group">
                        <label>Background</label>
                        <input type="text" class="form-control" name="company_organization" id="company_organization" placeholder="Company/Organization" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="background_field_of_study" id="background_field_of_study" placeholder="Background Field of Study" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="qualification" id="qualification" placeholder="Qualification" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="web" id="web" placeholder="Web" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="university" id="university" placeholder="University" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea name="general_info" class="form-control" placeholder="Tell us about yourself"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label>Choose Your Skills</label>
                        <select class="form-control valid select2"  name="langs[]" required multiple>
                            <optgroup label="Choose Language">
                                @foreach($languages as $language)
                                    <option value="{{$language}}">{{$language}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <div class="row">
                        @foreach($skills as $key=>$skill)
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group"><label for="university" class="control-label">{{$skill->skill_name}}</label>
                                    <input type="hidden" value="0" name="skill_{{strtolower(str_replace(' ', '_', $skill->skill_name))}}">
                                    <input type="checkbox" name="skill_{{strtolower(str_replace(' ', '_', $skill->skill_name))}}" value="1" class="error"><br>
                                </div>
                            </div>
                        @endforeach
                            <div class="offset-md-3">
                                <div class="form-group"><label for="university" class="control-label">Upload your CV</label>
                                    <input type="file" class="form-control" id="cv_upload" name="cv_upload" required  accept="application/pdf"  onchange="validatePDF(this)"  class="error"><br>
                                </div>
                            </div>
                            <div class="offset-md-3">
                                <div class="form-group"><label style="cursor: pointer" for="university" class="control-label" href="#modal-2" data-lity="#modal-2">I Agree to the Terms and
                                        Conditions</label>
                                    <input type="hidden" value="0" name="terms_conditions">
                                    <input type="checkbox" name="terms_conditions" value="1" required class="error"><br>
                                </div>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-solid text-uppercase circle btn-bordered border-thin font-size-14 font-weight-semibold" data-localscroll="true" data-localscroll-options="{&quot;scrollBelowSection&quot;:true}">
							<span>
								<span class="btn-txt">Apply</span>
							</span>
                    </button>
                </div>
                </form>
            </div><!-- /.col-md-10 col-md-offset-1 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
</div>
{!!Block::display('t&c')!!}
{!!Block::display('footer')!!}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
    $(document).ready(function () {
        $(".select2").select2({
            placeholder: "Choose Languages",
        });

    });
</script>
<script>
    var formOK = false;

    function validatePDF(objFileControl){
        var file = objFileControl.value;
        var len = file.length;
        var ext = file.slice(len - 4, len);
        if(ext.toUpperCase() == ".PDF"){
            formOK = true;
        }
        else{
            formOK = false;
            $("#cv_upload").val('');
            alert("Only PDF files allowed.");
        }
    }
</script>
<script>
    function get_projects(id) {
        if (id) {
            jQuery(".accordion-partners").empty();
            jQuery("#cover_image").hide();
            jQuery(".accordion-partners").append('<p class="loading">Loading</p>');
            jQuery.ajax({
                url: "/admin/projects/get_team_projects",
                type: "GET",
                data: {"id": id, "_token": "{{ csrf_token() }}"},
                success: function (result, textStatus, jqXHR) {
                    if (result != '') {
                        jQuery("#accordion-partners").empty();
                    }

                    var results = JSON.parse(result)
                    jQuery.each(results, function (index, value) {
                        jQuery("#cover_image").show();
                        jQuery(".loading").hide();
                        jQuery("#cover_image").attr("src", value.team_image);
                        jQuery(".accordion-partners").append("<div class='accordion-item panel'>\n" +
                            "                                            <div class='accordion-heading' role='tab' style='border-bottom: 1px solid #00000033;' id='heading_accordion-collapse-" + value.id + "'>\n" +
                            "                                                <h4 class='accordion-title font-size-16 font-weight-semibold'>\n" +
                            "                                                    <a class='collapsed' data-toggle='collapse' data-parent='#accordion-" + value.id + "' href='#accordion-collapse-" + value.id + "'\n" +
                            "                                                       aria-expanded='false' id='project_name' aria-controls='accordion-collapse-" + value.id + "'>\n" +
                            "                                                       " + value.project_name + "\n" +
                            "                                                    </a>\n" +
                            "                                                </h4>\n" +
                            "                                            </div><!-- /.accordion-heading -->\n" +
                            "                                            <div id='accordion-collapse-" + value.id + "' class='accordion-collapse collapse ' role='tabpanel'\n" +
                            "                                                 aria-labelledby='heading_accordion-collapse-" + value.id + "'>\n" +
                            "                                                <div class='accordion-content'>\n" +
                            "                                                    <p id='project_desc'>" + value.project_description + "</p>\n" +
                            "                                                    <a href=https://"+value.website+" id=project_web_"+value.id+">" + value.website + "</a>\n" +
                            "                                                </div><!-- /.accordion-content -->\n" +
                            "                                            </div><!-- /.accordion-collapse -->\n" +
                            "\n" +
                            "                                        </div>");

                        console.log(index, value);

                        if(value.website == null){
                            $("#project_web_"+value.id).hide();
                        }
                    });

                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });
        }
    }
</script>



