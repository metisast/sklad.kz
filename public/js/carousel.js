// Generated by CoffeeScript 1.10.0
jQuery(function() {
    this.film_rolls || (this.film_rolls = []);
    this.film_rolls['film_roll_1'] = new FilmRoll({
        container: '#film_roll_1',
        height: '+10'
    });
    /* First */
    this.film_rolls['film_roll_2'] = new FilmRoll({
        container: '#film_roll_2',
        height: 140,
        prev: '#film_roll_2_left',
        next: '#film_roll_2_right'
    });
    $('#film_roll_2').on('film_roll:moving', function() {
        return setTimeout(function() {
            return $('#film_roll_2 div.film_roll_shuttle').removeClass('moving_left moving_right');
        }, 550);
    });
    /* Second */
    this.film_rolls['film_roll_3'] = new FilmRoll({
        container: '#film_roll_3',
        height: 140,
        prev: '#film_roll_3_left',
        next: '#film_roll_3_right'
    });
    $('#film_roll_2').on('film_roll:moving', function() {
        return setTimeout(function() {
            return $('#film_roll_3 div.film_roll_shuttle').removeClass('moving_left moving_right');
        }, 550);
    });
    return true;
});