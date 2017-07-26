import {
    CHECK,
    LOGIN,
    LOGOUT,
    SET_USER,
    GET_LIST_FOLLOW,
    GET_GROUPS,
    CHANGE_HEADER_PHOTO,
    CHANGE_AVATAR,
    UPLOAD_IMAGES
} from './mutation-types';
import axios from 'axios'

export default {
    [CHECK](state) {
        state.authenticated = !!localStorage.getItem('access_token')
        axios.defaults.headers.common['Authorization'] = `Bearer ${localStorage.getItem('access_token')}`
    },

    [LOGIN](state, data) {
        const token = data.auth.access_token
        state.authenticated = true
        state.user = data.user
        localStorage.setItem('access_token', token)
        axios.defaults.headers.common['Authorization'] = `Bearer ${token}`
    },

    [LOGOUT](state) {
        state.authenticated = false
        state.user = ''
        localStorage.removeItem('access_token')
        axios.defaults.headers.common['Authorization']
    },

    [SET_USER](state, user) {
        state.user = user
    },

    [GET_LIST_FOLLOW](state, list) {
        state.listContact = list
    },

    [GET_GROUPS](state, list) {
        state.groups = list
    },

    [CHANGE_HEADER_PHOTO](state, image) {
        state.user.default_header = '/images/' + image.url_file
    },

    [CHANGE_AVATAR](state, image) {
        state.user.image_small = '/images/' + image.url_file + '?p=small'
        state.user.image_thumbnail = '/images/' + image.url_file + '?p=thumbnail'
    },

    [UPLOAD_IMAGES](state, imageArr) {
        state.user.media = imageArr.concat(state.user.media)
    }
};
