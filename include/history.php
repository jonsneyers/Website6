<div class="magick-header">
<blockquote>
I swear by my life and my love of it that I will never live for the sake of another man, nor ask another man to live for mine.<br />-- John Galt in "Atlas Shrugged", by Ayn Rand</blockquote>

<p class="lead magick-description">ImageMagick started with a request from my DuPont supervisor, Dr. David Pensak, to display computer-generated images on a monitor only capable of showing 256 unique colors simultaneously.  In 1987, monitors that could display 24-bit true color images were rare and quite expensive. There were a plethora of chemists and biologists at DuPont, but very were few computer scientists to confer with. Instead, I turned to Usenet for help, and posted a request for an algorithm to reduce 24-bit images to 256 colors.  Paul Raveling of the USC Information Sciences Institute responded, with not only a solution, but one that was already in source code and available from USC's FTP site. Over the course of the next few years, I had frequent opportunities to get help with other vexing computer science problems I encountered in the course of doing my job at DuPont.  Eventually I felt compelled to give thanks for the help I received from the knowledgeable folks on Usenet. I decided to freely release the image processing tools I developed to the world so that others could benefit from my efforts.</p>

<p>In 1990 there were few freely available image processing tools so I expected an enthusiastic reception.  Before a release was possible, Dr. Pensak had to convince upper management at DuPont to give away what they what they might perceive as valuable intellectual property. I suspect they agreed simply because ImageMagick was not chemically or biologically based, so they did not understand its value to the company. Either way, ImageMagick would not be available today without DuPont transferring the copyright to ImageMagick Studio LLC.  ImageMagick was posted to Usenet's comp.archives group on August 1st, 1990.</p>

<p>After ImageMagick's release, I got the occasional request for an enhancement, a report of a bug, or a contribution to the source base. In the mid 90's, I released the culmination of these efforts as ImageMagick 4.2.9.  At the time, I thought ImageMagick was complete.  It was utilized by thousands of users world-wide, and it was even showing up as part of a new operating system distributed freely called "Linux".</p>

<p>The next generation of ImageMagick, version 5, started when Bob Friesenhahn contacted me and suggested I improve the application programming interface so users could leverage the image-processing algorithms from other languages or scripts.  Bob also wrote a C++ wrapper for ImageMagick called Magick++, and began contributing enhancements such as the module loader facility, automatic file identification, and test suites.  In the mean-time, the project picked up a few other notable contributors: Glenn Randers-Pehrson, William Radcliffe, and Leonard Rosenthol.  By now, ImageMagick was utilized by tens of thousands of users, who reacted gruffly when a new release broke an existing API call or script.  The other members of the group wanted to freeze the API and command line, but I felt ImageMagick was not quite what I had envisioned it could be. Bob and the others created a fork of ImageMagick while I continued to develop ImageMagick.</p>

<p>I did not work alone for long.  Anthony Thyssen contacted me about deficiencies in the ImageMagick command line programs.  He pointed out that the command line was confusing when dealing with more than one image. He suggested an orderly, well-defined method for dealing with the command line, and this became ImageMagick version 6 (the current release). His efforts are detailed on his web pages, <a href="http://www.imagemagick.org/Usage/">Examples of ImageMagick Usage</a>.  I highly recommend that you peruse his site. He has illustrated the power of ImageMagick in ways that even I did not know were possible.</p>

<p>Another notable contributor, Fred Weinhaus, makes available a plethora of command-line <a href="http://www.fmwconcepts.com/imagemagick/">scripts</a> that perform geometric transforms, blurs, sharpens, edging, noise removal, and color manipulations.  Glenn Randers-Pehrson is our PNG guru and makes other valuable contributions. Dirk Lemstra made, and continues to make, numerous improvements to make ImageMagick more robust under Windows and distributes a .Net wrapper, <a href="https://magick.codeplex.com/">Magick.NET</a>.</p>

<p>It has been more than 25 years since ImageMagick was first conceived, and it looks likely that it will be here for another 25 and beyond. The command line and the application programming interface are stable, but there is still work to do.  The design of ImageMagick is an evolutionary process, with the design and implementation efforts serving to influence and guide further progress in the other.  We are currently working on <a href="http://www.imagemagick.org/ImageMagick-7.0.0">ImageMagick version 7</a>, where we aim to improve the design based on lessons learned from the version 6 implementation.</p>

<p>Cristy<br />Principal ImageMagick Architect</p>
</div>