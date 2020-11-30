package com.example.crudmysql_18051204077_septianwahyu.API;

import com.example.crudmysql_18051204077_septianwahyu.Model.ResponseModel;

import retrofit2.Call;
import retrofit2.http.DELETE;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.PUT;
import retrofit2.http.Path;

public interface APIRequestData {
    @GET("mahasiswa")
    Call<ResponseModel> ardGetMahasiswa();

    @FormUrlEncoded
    @POST("mahasiswa/create")
    Call<ResponseModel> ardCreateMahasiswa(
            @Field("nim") String nim,
            @Field("nama") String nama,
            @Field("Angkatan") int angkatan
    );

    @FormUrlEncoded
    @PUT("mahasiswa/{id}")
    Call<ResponseModel> ardUpdateMahasiswa(
            @Path("id") int id,
            @Field("nim") String nim,
            @Field("nama") String nama,
            @Field("angkatan") int angkatan
    );


    @DELETE("mahasiswa/{id}")
    Call<ResponseModel> ardDeleteMahasiswa(
            @Path("id") int id

    );

}
