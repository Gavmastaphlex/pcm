document.getElementById('dummy_inner').style.height = document.getElementById('playlist-people').offsetHeight + 'px';


document.getElementById('dummy').onscroll = function()
    {
            document.getElementById('playlist-outer').scrollTop = document.getElementById('dummy').scrollTop;
    }
    document.getElementById('playlist-outer').onscroll = function()
    {
document.getElementById('dummy').scrollTop = document.getElementById('playlist-outer').scrollTop;
    }